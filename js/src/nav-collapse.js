// *************************************
//
//   Responsive nav toggle
//   -> Collapse/expand navigation
//
// *************************************

$(function() {
  var menu = $('#menu-menu');
  var menuToggle = $('#js-navToggle');

  $(menuToggle).on('click', function(e) {
    e.preventDefault();
    menu.slideToggle(function(){
      if(menu.is(':hidden')) {
        menu.removeAttr('style');
      }
    });
  });
});