(function(){
  $('.sidenav').sidenav();

  anime({
    targets: "#navbar",
    backgroundColor: ["#e91e63", "#f44336", "#9575cd", "#00897b", "#a5d6a7", "#dce775"],
    duration: 3000,
    loop: true,
    direction: 'alternate'
  });
})(jQuery);
