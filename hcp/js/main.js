var BODY=$("body");navigator.userAgent.match(/Trident\/7\./)&&BODY.addClass("if-ie"),-1!=navigator.userAgent.indexOf("Safari")&&-1==navigator.userAgent.indexOf("Chrome")&&BODY.addClass("if-safari"),jQuery.cachedScript=function(e,a){return a=$.extend(a||{},{dataType:"script",cache:!0,url:e}),jQuery.ajax(a)};var viewWidth=Math.max(document.documentElement.clientWidth,window.innerWidth||0),WINDOW=$(window),TO_TOP=$("#back-to-top");TO_TOP.click(function(e){return e.preventDefault(),$("html,body").animate({scrollTop:0},400),!1}),$("#menu-button").on("click tap",function(){$("#menu #sort").slideToggle(),$(this).toggleClass("act")}),$(".under-menu-headline").on("mouseover tap","li",function(){var e=$(this).closest(".under-menu-headline"),a=$(this).index();$(this).addClass("active").siblings().removeClass("active"),e.next(".under-menu-content").children().eq(a).addClass("d-block").removeClass("d-none").siblings().addClass("d-none").removeClass("d-block")}),$(".check").length&&$(".check>li").prepend('<svg class="check-circle flex-constant mt-1" width="22" height="22" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>'),$("#news").length&&$("article").on("click",function(){var e=$(this).find("a").attr("href");location.href=e}),$("#pages").length&&document.querySelector("#pages").addEventListener("change",function(e){"all"==e.target.value?window.location.assign("./"):window.location.assign("?y="+e.target.value)}),document.addEventListener("click",function(e){var a=document.getElementById("contact-us-side"),t=e.target;do{if(t==a)return void a.classList.add("active");t=t.parentNode}while(t);a.classList.remove("active")});var lazyloadImages=[].slice.call(document.querySelectorAll("img.lazyload")),lazyloadBgs=[].slice.call(document.querySelectorAll(".bg-lazyload"));if("IntersectionObserver"in window&&!$("picture").length){var lazyloadImageObserver=new IntersectionObserver(function(e){e.forEach(function(e){if(e.isIntersecting){var a=e.target;a.src=a.dataset.src,a.dataset.srcset&&(a.srcset=a.dataset.srcset),a.classList.remove("lazyload"),a.classList.add("lazyloaded"),lazyloadImageObserver.unobserve(a)}})});lazyloadImages.forEach(function(e){lazyloadImageObserver.observe(e)});var lazyloadBgObserver=new IntersectionObserver(function(e){e.forEach(function(e){if(e.isIntersecting){var a=e.target,t=!0;a.dataset.view&&a.dataset.view>=viewWidth&&(t=!1),t&&(a.style.backgroundImage="url('"+a.dataset.image+"')",a.dataset.height&&(a.style.minHeight=a.dataset.height),a.dataset.position&&(a.style.backgroundPosition=a.dataset.position),a.classList.remove("bg-lazyload"),a.classList.add("bg-lazyloaded"),lazyloadBgObserver.unobserve(a))}})});lazyloadBgs.forEach(function(e){lazyloadBgObserver.observe(e)})}else $(".lazyload").length&&$.cachedScript("/lib/lazysizes.min.js"),$(".bg-lazyload").length&&$(".bg-lazyload").each(function(){var e=$(this);e.css("background-image",'url("'+e.attr("data-image")+'")')});