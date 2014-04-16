$(document).ready(function() {
    $('.has-dropdown').click(function() {
      $(this).siblings('.dropdown').toggleClass('is-hidden');
    });
});