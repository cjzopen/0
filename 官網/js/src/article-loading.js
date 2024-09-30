function articleLoading(product,event_type){
        event_type = event_type || 'articles';
        var $main = $('section.list .container');
        var phpUrl = '/php/product_events.php';
        if(event_type == 'articles'){
            $main.html('<h2 class="text-center">相關文章</h2><hr>')
        }else if(event_type == 'best_practice'){
            $main.html('<h2 class="text-center">成功案例</h2><hr>');
            phpUrl = '/php/best_practice.php';
        }
        var data ={
            product : product,
            event_type : event_type
        }
        $.ajax({
            type: "GET",
            dataType: "html",
            url: phpUrl,
            data: data,
            beforeSend: function(){
                $main.append('<div class="text-center loading-circle"><i class="fa fa-spinner fa-span fa-2x fa-fw"></i><span>Loading...</span></div>')
            }
        }).always(function(){
            $main.find('.loading-circle').remove()
        }).done(function(data){
            // console.log('article loaded')
            $main.append(data);
            $('section.list .col-md-3 img').on("error", function(){
                $(this).attr('src', '/img/events.jpg');
            });
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
            $main.find('hr').after(errMsg)
        });
}