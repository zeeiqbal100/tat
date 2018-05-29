$(window).load(function() {
     
             $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:10,
                    nav:true,
                    items:1,
                    autoHeight:true,
                    nav: true,
                    navText: ["<span class='mck-arrow-left-icon'></span>","<span class='mck-arrow-right-icon'></span>"]
                  
                });
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 0) {// can be whatever, 0 refers to the top space you allow
        $('.arrow-container').hide();
    }
    else {
        $('.arrow-container').show();
    }
});


jQuery(document).ready(function ($) {

  $('#checkbox').change(function(){
    setInterval(function () {
        moveRight();
    }, 3000);
  });
  
  var slideCount = $('#lop-slider ul li').length;
  var slideWidth = $('#lop-slider ul li').width();
  var slideHeight = $('#lop-slider ul li').height();
  var sliderUlWidth = slideCount * slideWidth;
  
  $('#lop-slider').css({ width: slideWidth, height: slideHeight });
  
  $('#lop-slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
  
    $('#lop-slider ul li:last-child').prependTo('#lop-slider ul');

    function moveLeft() {
        $('#lop-slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#lop-slider ul li:last-child').prependTo('#lop-slider ul');
            $('#lop-slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#lop-slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#lop-slider ul li:first-child').appendTo('#lop-slider ul');
            $('#lop-slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});    


