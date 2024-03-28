$(document).ready(function(){
    const $popupLink = $('#popup-link');
    const $popup = $('#popup');
    const $closePopup = $('#close-popup');
    const $darkModeTrigger = $('.dark-mode-trigger');
    const $darkModeContent = $('.dark-mode-content');


    $popupLink.on("click", function(e){
        e.preventDefault();
        $popup.css("display","flex");
        // $popup.show();
    })

    $closePopup.on("click", function(e){
        e.preventDefault();
        $popup.css("display","none")
        // $popup.hide();
    })

    $darkModeTrigger.on("mouseenter", function(){
        $darkModeContent.css("background-color","#333")
    })
 
    $darkModeTrigger.on("mouseleave", function(){
        $darkModeContent.css("background-color","#fff")
    })
});