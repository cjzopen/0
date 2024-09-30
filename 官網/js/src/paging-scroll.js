function pageScroll(anchor_scroll,mt){
    // paging 文字 scroll 變色
    $('.paging li').each(function(){
        var $this = $(this);
        var pag_text = $this.find('a');
        var href = pag_text.attr('href');
        var tod = href.replace(/[#]/, "");
        var section = $("body").find('#' + tod);
        $(window).scroll(function() {
            if(section.length){
                var win_st = $(window).scrollTop();
                var section_top = section.offset().top;
                if(win_st + mt > section_top){
                    $this.siblings().find('a').removeClass('act');
                    pag_text.addClass('act')
                }
            }
        })
    })
    //anchor scroll
    if(anchor_scroll){
        var applyScrolling = function (arr, cb) {
            for (var i = 0; i < arr.length; i++) {
                cb.call(null, i, arr[i])
            }
        }
        var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
        var sticky_height = $('.sticky').outerHeight() + (mt/10);
        var anchors = document.querySelectorAll(".paging li a[href^='#']")
        var win_st = $(window).scrollTop();
        $(window).scroll(function() {
            win_st = $(window).scrollTop();
        })
        if (window.scrollTo) {
            applyScrolling(anchors, function (index, el) {
                var target = document.getElementById(el.getAttribute('href').substring(1))
                el.addEventListener('click', function (e) {
                    // var duration = Math.floor(Math.abs(win_st-target.offsetTop)*0.8);
                    // if(duration<300)duration=300;
                    e.preventDefault()
                    $(this).blur()
                    // window.scrollTo(0, target.offsetTop)
                    $body.stop(true,false).animate({
                        scrollTop: target.offsetTop - sticky_height
                    }, 400);
                })
            })
        }
    }
}