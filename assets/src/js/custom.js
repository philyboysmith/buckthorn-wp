// @codekit-prepend "jquery.min.js"
// @codekit-prepend "../../node_modules/magnific-popup/dist/jquery.magnific-popup.min.js";

jQuery(document).ready(function ($) {

    $('.mfp-iframe').magnificPopup({
        type:'iframe',
        markup: '<div class="mfp-iframe-scaler text-basecolor7">'+
        '<div class="mfp-close "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.65 33.55" class="h-6"><g id="f3f264cb-6f95-4621-aeb1-b8ed316d6837" data-name="Layer 2"><g id="e166d7d7-9c91-45aa-a216-b6eb7ac00402" data-name="menu and footer"><path d="M19.87,16.92,33,3.78A2.21,2.21,0,1,0,29.88.65L17,13.56,4.06.65A2.21,2.21,0,0,0,.93,3.78L13.79,16.63.65,29.77a2.22,2.22,0,0,0,1.56,3.78,2.24,2.24,0,0,0,1.57-.65L16.69,20,29.59,32.9a2.24,2.24,0,0,0,1.57.65,2.22,2.22,0,0,0,1.56-3.78Z" style="fill:currentColor"></path></g></g></svg></div>'+
        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
      '</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button

        midClick: true,
        showCloseBtn:true,
      });

$('body').addClass('loaded');

$('.open-popup-link').magnificPopup({
  type:'inline',
    gallery:{
    enabled:true
  },
  closeOnBgClick: false,
  showCloseBtn:false,
  closeBtnInside: false,   // Custom settings, never mind
  fixedContentPos: false,  // Custom settings, never mind
  fixedBgPos: true,        // Custom settings, never mind


});

});


//TABS
function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

jQuery(document).ready(function ($) {


ScrollReveal().reveal('.reveal', {
	interval: 100,
});
});
