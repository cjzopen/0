function formCheck(){
    var pattern = /^\d{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])$/i;
    var isPass = true;
    var msg = $('#msg');

    // $('p.danger').hide();

    msg.text('');
    msg.css('color','red');
    $('#qq').css('border-color','red')

    if(contact_form.qq.value == 'in'){
        if(contact_form.news_name.value.length<1){
            $('#news_name').css('border-color','red');
            isPass = false;
        }else{
            $('#news_name').css('border-color','#5cb85c')
        }
        if(contact_form.content.value.length<10){
            $('#content').css('border-color','red');
            isPass = false;
        }else{
            $('#content').css('border-color','#5cb85c')
        }

    }else if(contact_form.qq.value == 'out'){
        if(contact_form.href.value.length<5){
            $('#href').css('border-color','red');
            isPass = false;
        }else{
            $('#href').css('border-color','#5cb85c')
        }

    }else{
        $('#qq').css('border-color','red');
        isPass = false;
    }

    if(contact_form.title.value.length<1){
        $('#title').css('border-color','red');
        isPass = false;
    }else{
        $('#title').css('border-color','#5cb85c')
    }
    if(!pattern.test(contact_form.date.value)){
        $('#date').css('border-color','red');
        isPass = false;
    }else{
        $('#date').css('border-color','#5cb85c')
    }
    if(isPass){
        // var budget = contact_form.budget.value;
        var user = {
            qq : contact_form.qq.value,
            product : contact_form.product.value,
            title : contact_form.title.value,
            date : contact_form.date.value,
            href : contact_form.href.value,
            news_name : contact_form.news_name.value,
            content : contact_form.content.value,
            action:'add'
        };

        $.ajax({
            type: "POST",
            url: "add_post.php",
            data: user,
            beforeSend: function(){
                var btn = $('#contact_form button');
                btn.css({'opacity':'0.5','pointer-events':'none'})
                btn.text('送出中')
            }
        }).done(function(data){
            var sMsg = data;
            console.log(data)
            if(data['send']==true){
                msg.text('送出成功');
                msg.css('color','#5cb85c')
                $("#contact_form")[0].reset();
                $.ajax({
                    type: "POST",
                    url: "log_post.php",
                    data: user,
                    cache:false
                });
            }

        }).fail(function(jqXHR, status, errorThrown) {
            console.log('header load Error: ' + errorThrown)
            console.log('Status: ' + status)
            console.dir(jqXHR)
            var errMsg;
            if (jqXHR.status === 0) {
                errMsg = 'Not connect./n Verify Network.';
            } else if (jqXHR.status == 404) {
                errMsg = 'Requested page not found. [404]';
            } else if (jqXHR.status == 500) {
                errMsg = 'Internal Server Error [500].';
            } else if (status === 'parsererror') {
                errMsg = 'Requested JSON parse failed.';
            } else if (status === 'timeout') {
                errMsg = 'Time out error.';
            } else if (status === 'abort') {
                errMsg = 'Ajax request aborted.';
            } else {
                errMsg = 'Uncaught Error./n' + jqXHR.responseText;
            }
            msg.text(errMsg)
        }).always(function(){
            var btn = $('#contact_form button');
            btn.css({'opacity':'1','pointer-events':'all'})
            btn.text('送出')
        });
    }

    return false;
};