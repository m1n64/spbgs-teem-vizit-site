(function() {
  // $('.sidenav').sidenav();
  //
  $(window).on("load", function(){
    $('body').css("overflow", "scroll").css("overflow-x", "hidden");
    $('body, html').animate({
      scrollTop: 0
    }, 500);
    $('body').css("overflow", "hidden");
  });


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
    $('body').css("overflow", "scroll").css("overflow-x", "hidden");//.css("background-image", "none").css("animation", "none");
  });

  $(".lang_name").click(function() {
    let lang = $(this).attr('lang');
    setCookie("lang", "/", lang, 365);
  });

  $("#project-list").viewportChecker({
    classToAdd: "animShow",
    offset: 150
  });

  $("#get-site").viewportChecker({
    classToAdd: "animShow",
    offset: 100
  })

  // Select
  $('.slct').click(function() {
    var dropBlock = $(this).parent().find('.drop');
    if (dropBlock.is(':hidden')) {
      dropBlock.slideDown();
      $(this).addClass('active');
      $('.drop').find('li').click(function() {
        var selectResult = $(this).html();
        $(this).parent().parent().find('input').val(selectResult);
        $(this).parent().parent().find('.slct').removeClass('active').html(selectResult);
        dropBlock.slideUp();
      });
    } else {
      $(this).removeClass('active');
      dropBlock.slideUp();
    }
    return false;
  });

  var wrap1 = $('#wrapper-ok'),
      wrap2 = $("#wrapper-error"),
       modal1 = $('.cover-ok, .modal-ok, .content-ok');
       modal2 = $('.cover-error, .modal-error, .content-error');


  $('.modal-ok').click(function() {
    wrap1.on('click', function(event) {
      var select = $('.content-ok');
      if ($(event.target).closest(select).length)
        return;
      modal1.fadeOut();
      wrap1.unbind('click');
    });
  });

  $('.modal-error').click(function() {
    wrap2.on('click', function(event) {
      var select = $('.content-error');
      if ($(event.target).closest(select).length)
        return;
      modal2.fadeOut();
      wrap2.unbind('click');
    });
  });

  var params = {
    id_group: "-179401734",
    id_user: "535058076",
    token: "79f3224391956046b80fab5078d861198afcc018a117dfb00acefe076498f8c79299d16ef4dfdbe162d10",
    pages: ["id94947434#Алёна", "spikuza#Стас", "pyrkh1#Никита", "powerofstrike#Антон", "spbg_grib#Иван"]
  }

  $("#order").click(function(){
    //modal1.fadeIn();
    let $name = $("#name-user"),
        $email = $("#email-user"),
        $select = $("#select"),
        $desc = $("#desc-user");

    if ($name.val().length == "" || $email.val().length == "" || $select.val().length == "" || $desc.val().length == "" || !isValidEmailAddress($email.val())) {
      modal2.fadeIn();
      return false;
    }

    let id = params.id_group;

    let users = "";
    params.pages.forEach((el)=>{
      let spl = el.split('#');
      users += `*${spl[0]} (${spl[1]}) `;
    });

    let text = `Поступил заказ от ${$name.val()}. \nE-MAIL: ${$email.val()}. \nВыбранная услуга: ${$select.val()}. \nЕго пожелания: ${$desc.val()}. \n${users}`;

    let api_text = `https://api.vk.com/method/wall.post?owner_id=${id}&message=${text}&access_token=${params.token}&v=5.52`;

    $.ajax({
      url: api_text,
      method: 'GET',
      dataType: 'JSONP',
      success: function(e) {
        modal1.fadeIn();
        $name.val('');
        $email.val('');
        $select.val('');
        $desc.val('');
      }
    });

    $.post(
      location.protocol+"//"+location.host+"/ajax/mailto.ajax.php",
      {
        mail: base64_encode($email.val())
      }
    );

  });


  // //
  // window.addEventListener('wheel', function (e) {
  //   var parent = document.getElementById('content-scroll');
  // var child = document.getElementById('scrolldown');
  // child.style.paddingRight = child.offsetWidth - child.clientWidth + "px";
  // });
})(jQuery);
