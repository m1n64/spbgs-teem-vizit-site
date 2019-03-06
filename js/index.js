(function(){
  // $('.sidenav').sidenav();
  //
  anime({
    targets: ".divider-scroll",
    backgroundColor: ["#48004e", "#510058", "#3d0042", "#580060"],//["#e91e63", "#f44336", "#9575cd", "#00897b", "#a5d6a7", "#dce775", "#fff59d", "#ffcc80", "#ffab91"],
    duration: 50000,
    loop: true,
    direction: 'alternate'
  });

  $("#main-scroll").click(function(){
    let sc = $(this).attr("for");
    $('html, body').animate({scrollTop: $(`${sc}`).offset().top}, 500);
  });
})(jQuery);
