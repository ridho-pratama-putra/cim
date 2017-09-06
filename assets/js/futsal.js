(function($){
  $(function(){  
    $('.button-collapse').sideNav();
    $('.materialboxed').materialbox();
    $('.parallax').parallax();
    $('select').material_select();
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      format:'yyyy-mm-d',
      selectYears: 7 // Creates a dropdown of 15 years to control year
    });
    $('.textarea').trigger('autoresize');
    $('.slider').slider();
    $('.slider').slider('pause');
    $('.slider').slider('start');
    $('.slider').slider('next');
    $('.slider').slider('prev');
    $('.carousel.carousel-slider').carousel({full_width: true});
    $('.carousel').carousel();
    $('.parallax').parallax();
    $('.tooltipped').tooltip('remove');
    $(".dropdown-button").dropdown();
    $('.dropdown-button').dropdown('open');
    $('.dropdown-button').dropdown('close');
    $('.modal-trigger').leanModal();
    $('.tooltipped').tooltip({delay: 50});
    // /$('#login').openModal();
    //$('.modal').closeModal();
    $('.clockpicker').clockpicker();
    $('.scrollspy').scrollSpy({
        scrollOffset: 19
    });
  });
})(jQuery);