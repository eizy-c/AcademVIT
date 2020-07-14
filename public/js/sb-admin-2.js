(function($) {
  "use strict"; // Start of use strict

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });

})(jQuery); // End of use strict

// esconder el sidebar
$(document).ready(function(){
    // Menu Responsive
    $(".boton-sidebar").click(function(e){
      e.preventDefault();
      if($(".boton-sidebar i").attr('class') == 'fa fa-bars'){
          $(".boton-sidebar i").removeClass('fa fa-bars').addClass('fa fa-times');
          $("#accordionSidebar").show();
      } else {
          $(".boton-sidebar i").removeClass('fa fa-times').addClass('fa fa-bars');
          $("#accordionSidebar").hide();
      }
    });
    // Agregando y Eliminando Clase nav-responsive
    if ($(window).width() <= 768){
        $("#accordionSidebar").hide();
    }
    if ($(window).width() > 768) {
        $("#accordionSidebar").show();
    }
    
});

// Agregando navbar fixed
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $("#logo").removeClass("d-none");
        $(".navbar").removeClass("bg-transparent");
        $(".navbar").addClass("navbar-dark");
        $("i").addClass("text-white");
    } else {
        $("#logo").addClass("d-none");
        $(".navbar").removeClass("navbar-dark");
        $("i").removeClass("text-white");
    }
});


$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-login").addClass("navbar-dark");
         $("#logo").removeClass("d-md-none");
    } else {
        $(".navbar-login").removeClass("navbar-dark");
        $("#logo").addClass("d-md-none");
    }
});
// validaciones del formulario de inicio
$(document).ready(function(){
  $('#datosUser-nav').removeAttr('href data-toggle');
  $('#verificar-nav').removeAttr('href data-toggle');

  $('#next_datosUser').click(function(){
    var error = '';
    if($.trim($('#nombreaula').val()).length == 0){
     error = 'Debes llenar este campo';
     $('#validarNombreaula').text(error);
     $('#nombreaula').addClass('is-invalid');
    }else{
       $('#nombreaula').removeClass('is-invalid');
      $('#nombreaula').addClass('is-valid');
       $('#validarNombreaula').text('');
    }
    
    if(error.length == 0){
      $('#datosUser-nav').attr('href', '#datosUser-tab');
      $('#datosUser-nav').attr('data-toggle', 'tab');
      $('#datosUser-nav').addClass('active');
      $('#datosUser-tab').addClass('active');
      $('#datosUser-tab').addClass('show');
      $('#datosAula-nav').removeAttr('href data-toggle');
      $('#datosAula-nav').removeClass('active');
      $('#datosAula-tab').removeClass('active');
      $('#datosAula-tab').removeClass('show');
    }
  });
  $('#previous_datosUser').click(function(){
    $('#datosAula-nav').attr('href', '#datosAula-tab');
    $('#datosAula-nav').attr('data-toggle', 'tab');
    $('#datosAula-nav').addClass('active');
    $('#datosAula-tab').addClass('active');
    $('#datosAula-tab').addClass('show');
    $('#datosUser-nav').removeAttr('href data-toggle');
    $('#datosUser-nav').removeClass('active');
    $('#datosUser-tab').removeClass('active');
    $('#datosUser-tab').removeClass('show');
  });

  $('#next_Verificar').click(function(){
    var error = '';

    if($.trim($('#email').val()).length == 0){
     error = 'Debes llenar este campo';
     $('#validarEmail').text(error);
     $('#email').addClass('is-invalid');
    }else{
       $('#email').removeClass('is-invalid');
      $('#email').addClass('is-valid');
       $('#validarEmail').text('');
    }

    if($.trim($('#name').val()).length == 0){
     error = 'Debes llenar este campo';
     $('#validarname').text(error);
     $('#name').addClass('is-invalid');
    }else{
       $('#name').removeClass('is-invalid');
      $('#name').addClass('is-valid');
       $('#validarname').text('');
    }

    if($.trim($('#password').val()).length == 0){
     error = 'Debes llenar este campo';
     $('#validarPassword').text(error);
     $('#password').addClass('is-invalid');
    }else{
       $('#password').removeClass('is-invalid');
      $('#password').addClass('is-valid');
       $('#validarPassword').text('');
    }

    if($.trim($('#password_confirmation').val()).length == 0){
     error = 'Debes llenar este campo';
     $('#validarpassword_confirmation').text(error);
     $('#password_confirmation').addClass('is-invalid');

    }else if ($.trim($('#password_confirmation').val()) != $.trim($('#password').val())) {
        error = 'Contraseñas no coinciden';
        $('#validarpassword_confirmation').text(error);
      $('#password_confirmation').addClass('is-invalid');
     }else{
       $('#password_confirmation').removeClass('is-invalid');
      $('#password_confirmation').addClass('is-valid');
       $('#validarpassword_confirmation').text('');
    }

    if(error.length ==0){

      $('#aula-name').text($('#nombreaula').val());
      $('#user-name').text($('#name').val());
      $('#user-email').text($('#email').val());


      $('#verificar-nav').attr('href', '#verificar-tab');
      $('#verificar-nav').attr('data-toggle', 'tab');
      $('#verificar-nav').addClass('active');
      $('#verificar-tab').addClass('active');
      $('#verificar-tab').addClass('show');
      $('#datosUser-nav').removeAttr('href data-toggle');
      $('#datosUser-nav').removeClass('active');
      $('#datosUser-tab').removeClass('active');
      $('#datosUser-tab').removeClass('show');
    }
  });
  $('#previous_verificar').click(function(){
    $('#datosUser-nav').attr('href', '#datosUser-tab');
    $('#datosUser-nav').attr('data-toggle', 'tab');
    $('#datosUser-nav').addClass('active');
    $('#datosUser-tab').addClass('active');
    $('#datosUser-tab').addClass('show');
    $('#verificar-nav').removeAttr('href data-toggle');
    $('#verificar-nav').removeClass('active');
    $('#verificar-tab').removeClass('active');
    $('#verificar-tab').removeClass('show');
  });
});


$('#formAddActividad').hide();
$('#addActividad').click(function(){
  $('#addActividad').hide();
  $('#formAddActividad').toggle(1000);
});
$('#cancelActividad').click(function(){
  $('#addActividad').show();
  $('#formAddActividad').toggle(1000);
});