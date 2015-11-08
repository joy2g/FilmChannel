var activeElement = 0;//select default tab
$(function() {
    var items = $('.btn-nav');
    $( items[activeElement] ).addClass('active');
    $( ".btn-nav" ).click(function() {
        $( items[activeElement] ).removeClass('active');
        $( this ).addClass('active');
        activeElement = $( ".btn-nav" ).index( this );
    });
});

$(document).ready(function() {

  $("#owl-demo").owlCarousel({
    items : 5,
    lazyLoad : true,
    navigation : true	
  });

  $('.owl-pagination').hide();

});