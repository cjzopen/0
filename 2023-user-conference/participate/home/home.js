$(document).ready(function() {
	$('<div id="temp"></div>').appendTo('body');

	$('input[required]').each(function() {
		var asterisk = '<span class="text-danger"> *</span>';
		$(this).parent().prev('label').append(asterisk);
		$(this).parent('label').append(asterisk);
	});

	$('#agreeToTerms a').click(function() {
		$('#temp').load('home/terms.html', function() {
			$('#modalTerms').modal();
		});
		return false;
	});

	$('form#signup').bootstrapValidator( {
		live: 'enabled',
		submitButtons: 'button[type="submit"]',
		feedbackIcons: {
			valid: 'glyphicon glyphicon-ok',
			invalid: 'glyphicon glyphicon-remove',
			validating: 'glyphicon glyphicon-refresh'
		},
		fields: {
			name: { 
				validators: { 
					notEmpty: { 
						message: '請輸入姓名' 
					}
				}
			},
			company: {
				validators: { 
					notEmpty: { 
						message: '請輸入公司名稱' 
					} 
				}
			},	
			dept:{ 
				validators: { 
					notEmpty: { 
						message: '請輸入部門名稱' 
					} 
				} 
			},
			title: { 
				validators: { 
					notEmpty: { 
						message: '請輸入職稱' 
					} 
				} 
			},
			phone:        { 
				validators: { /*
					regexp: { 
						regexp: /^(0([3-8]{1}|[2-9]{2})-[0-9]{3}-[0-9]{4})|(02-[0-9]{4}-[0-9]{4})$/g, message: '電話格式：02-1234-5678 或 03-123-4567'
					},*/
					notEmpty: { 
						message: '請輸入公司電話' 
					} 
				} 
			},
			
			ext: { 
				validators: { /*
					stringLength: { 
						max: 5, message: '分機號碼不大於五位數' 
					},
					notEmpty: { 
						message: '請輸入分或無' 
					} */
				}
			},
			
			mobile: { 
				validators: { 
					regexp: { 
						regexp: /^(09[0-9]{2}-[0-9]{6})$/g, message: '手機格式：0912-345678'
					}
				} 
			},
			email:        { validators: { emailAddress: { message: '格式錯誤' }, notEmpty: { message: '請輸入連絡信箱' } } },
			isVeg:        { validators: { notEmpty: { message: '請選取用餐方式' } } },
			agreeToTerms: { validators: { notEmpty: { message: '您必須接受隱私權聲明' } } }
		},
		submitHandler: function(validator, form, submitButton) {
			url = form.attr('action'),
			type = form.attr('method'),
			data = {};
			
			form.find('[name]').each(function(index, value) {
				var field = $(this),
				name = field.attr('name'),
				type = field.attr('type')
				if(type == 'text' || type == 'email' || type == 'tel'){
					value = field.val(),
					data[name] = value
				}
			});
			form.find('input[name]:checked').each(function(index, value) {
				var field = $(this),
				name = field.attr('name')
				value = field.val(),
				data[name] = value
			});
			/*
			form.find('option:selected').each(function(index, value) {
				var field = $(this),
				name = "from"
				value = field.val(),
				data[name] = value,
				console.log(name + value)
			});
			*/
			/*
			var confirmData = '<ul>';
			confirmData += '<li>公司名稱: ' + data.company + '</li>';
			confirmData += '<li>電話號碼: ' + data.phone   + '</li>';
			confirmData += '<li>姓名: '     + data.name    + '</li>';
			confirmData += '<li>部門名稱: ' + data.dept    + '</li>';
			confirmData += '<li>職稱: '     + data.title   + '</li>';
			confirmData += '<li>電子信箱：' + data.email   + '</li>';
			confirmData += '<li>行動電話：' + data.mobile  + '</li>';
			confirmData += '</ul>';
			*/

			var confirmData = '<table class="table table-condensed table-bordered table-hover">';
			confirmData += '<tr><th class="warning">姓名</th><td>'     + data.name    + '</td></tr>';
			confirmData += '<tr><th class="warning">公司名稱</th><td>' + data.company + '</td></tr>';
			confirmData += '<tr><th class="warning">部門名稱</th><td>' + data.dept    + '</td></tr>';
			confirmData += '<tr><th class="warning">職稱</th><td>'     + data.title + '</td></tr>';
			confirmData += '<tr><th class="warning">公司電話</th><td>' + data.phone  + ' .ext '+data.ext+ '</td></tr>';
			confirmData += '<tr><th class="warning">手機號碼</th><td>' + data.mobile   + '</td></tr>';			
			confirmData += '<tr><th class="warning">連絡信箱</th><td>' + data.email   + '</td></tr>';	
			confirmData += '<tr><th class="warning">用餐方式</th><td>' + data.isVeg + '</td></tr>';	
			confirmData += '</table>';

			$('#temp').load('home/confirm.html', function() {
				$('p.response').html(confirmData);
				$('#modalConfirm').modal( {
					keyboard: false
				});
				$('.modal-content').css('position', 'relative');
				$('button#confirm').click(function() {
					var loader = new ajaxLoader('.modal-content', {
						classOveride: 'blue-loader',
						bgColor: '#000'
					});
					var request = $.ajax( {
						url: url,
						type: type,
						dataType: 'json',
						timeout: 30000, // Timeout after 30 seconds
						data: data
					});

					request.done(function(response) {
						loader.remove();
						$('#modalConfirm').on('hidden.bs.modal', function(e) {
							if (response.success) {
								form[0].reset();
								validator.resetForm();
								$('#temp').load('home/success.html?', function() {
									$('#modalSuccess').modal();
									$('#modalSuccess').on('hidden.bs.modal', function(e) {
										window.location.href = '../';
									});
								});
							} else {
								$('#temp').load('home/process-error.html', function() {
									$('p.response').html(response.message);
									$('#modalProcessError').modal();
								});
							}
						}).modal('hide');
					});
					
					request.fail(function(jqXHR, textStatus) {
						loader.remove();
						$('#modalConfirm').modal('hide');
						$('#modalConfirm').on('hidden.bs.modal', function(e) {
							var errMsg;

							if (jqXHR.status === 0) {
								errMsg = 'Not connect.n Verify Network.';
							} else if (jqXHR.status == 404) {
								errMsg = 'Requested page not found. [404]';
							} else if (jqXHR.status == 500) {
								errMsg = 'Internal Server Error [500].';
							} else if (exception === 'parsererror') {
								errMsg = 'Requested JSON parse failed.';
							} else if (exception === 'timeout') {
								errMsg = 'Time out error.';
							} else if (exception === 'abort') {
								errMsg = 'Ajax request aborted.';
							} else {
								errMsg = 'Uncaught Error.n' + jqXHR.responseText;
							}

							$('#temp').load('_assets/inc/ajax-error.html', function() {
								$('p.response').text(errMsg);
								$('#modalAjaxError').modal();
							});
						});
					});
				});
			});
		}
	});

	$(".fbbox").click(function() {
		$(this).animate( {right: "46"}, "medium" );
		$(this).animate( {right: "-246"}, 5000 );
	});
});
