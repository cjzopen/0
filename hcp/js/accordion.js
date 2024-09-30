// var acc = document.getElementsByClassName("area-accordion");
// var i;

// for (i = 0; i < acc.length; i++) {
//   acc[i].addEventListener("click", function() {
//     this.classList.toggle("active");
//     this.setAttribute("aria-expanded", this.getAttribute("aria-expanded")== "false" ? "true" : "false");
//     var panel = this.nextElementSibling;
//     if (panel.style.maxHeight){
//       panel.style.maxHeight = null;
//     } else {
//       panel.style.maxHeight = panel.scrollHeight + "px";
//     }
//   });
// }
$('.area-accordion').on('click',function(){
  var accordionGroup = $(this).parent().children('.area-accordion');
  accordionGroup.toggleClass('active');
  accordionGroup.attr("aria-expanded", $(this).attr("aria-expanded")== "false" ? "true" : "false");
  // var panel = accordionGroup.next();
  var panel = $(this).parent().children('.area-accordion-panel');
  if (panel.css('max-height') !== '0px'){
    panel.css('max-height','0px');
  } else {
    panel.each(function() {
        $(this).css('max-height', $(this).prop('scrollHeight') + "px");
    });
  }
})