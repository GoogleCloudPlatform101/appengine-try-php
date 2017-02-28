/** Scroll past parallax **/
$(".get-scrolling").click(function(){
  $('html, body').animate({ scrollTop: $(this).offset().top }, 2000);
});