// @codekit-prepend "jquery.min.js"
// @codekit-prepend "../../node_modules/magnific-popup/dist/jquery.magnific-popup.min.js";

jQuery(document).ready(function ($) {
    $('.mfp-iframe').magnificPopup({
        type:'iframe',
        midClick: true,
        closeOnBgClick: true,

      });

    $('body').addClass('loaded');
$('.open-popup-link').magnificPopup({
  type:'inline',
    gallery:{
    enabled:true
  },
  showCloseBtn:false,
  closeBtnInside: false,   // Custom settings, never mind
  fixedContentPos: false,  // Custom settings, never mind
  fixedBgPos: true,        // Custom settings, never mind

  callbacks: {

      open: function() {                        // When you open the
          $('body').css('overflow', 'hidden');  // window, the element
      },                                        // "body" is used "overflow: hidden".

      close: function() {                       // When the window
          $('body').css('overflow', '');        // is closed, the
      },                                        // "overflow" gets the initial value.

  }
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
