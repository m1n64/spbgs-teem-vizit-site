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
    token: "965aebecd6f1fa19eca429b5083e6143b460a7140d73d819293e5345b0cff469d62cb92790b356245aeed"
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
    let text = `Поступил заказ от ${$name.val()}. E-MAIL: ${$email.val()}. Выбранная услуга: ${$select.val()}. Его пожелания: ${$desc.val()}.`;

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

  });


  // //
  // window.addEventListener('wheel', function (e) {
  //   var parent = document.getElementById('content-scroll');
  // var child = document.getElementById('scrolldown');
  // child.style.paddingRight = child.offsetWidth - child.clientWidth + "px";
  // });
})(jQuery);
