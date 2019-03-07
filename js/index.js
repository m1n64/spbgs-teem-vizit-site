(function() {
  // $('.sidenav').sidenav();
  //

  $('html, body').animate({
    scrollTop: 0
  }, 100);

  anime({
    targets: ".divider-scroll",
    backgroundColor: ["#48004e", "#510058", "#3d0042", "#580060"], //["#e91e63", "#f44336", "#9575cd", "#00897b", "#a5d6a7", "#dce775", "#fff59d", "#ffcc80", "#ffab91"],
    duration: 50000,
    loop: true,
    direction: 'alternate'
  });

  $("#main-scroll").click(function() {
    let sc = $(this).attr("for");
    $("#content-scroll").animate({
      opacity: 1
    }, 500);
    $('html, body').animate({
      scrollTop: $(`${sc}`).offset().top
    }, 500);
    $('body').css("overflow", "scroll").css("overflow-x", "hidden");
  });

  $(".lang_name").click(function(){
    let lang = $(this).attr('lang');
    setCookie("lang", "/", lang, 365);
  });
  //
  // window.addEventListener('wheel', function (e) {
  //   var parent = document.getElementById('content-scroll');
  // var child = document.getElementById('scrolldown');
  // child.style.paddingRight = child.offsetWidth - child.clientWidth + "px";
  // });
})(jQuery);
