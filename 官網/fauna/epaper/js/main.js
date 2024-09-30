// check for ios device
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	$('body').addClass('if-mobile');
}
// if-ie
if(navigator.userAgent.match(/Trident\/7\./)) {
    $('body').addClass('if-ie');
}
//if edge
if(/Edge\/\d./i.test(navigator.userAgent)){
    $('body').addClass('if-edge');
}
$(function(){
})