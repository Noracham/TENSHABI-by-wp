var $ = jQuery.noConflict();

$(function () {
  $(".openbtn").click(function () {
    $(this).toggleClass("active");
  });

  //main
  //appeal
  $(window).on("load resize", function () {
    let n_width = $(window).width();
    console.log(n_width);
    if (n_width < 1024) {
      $(".appeal_txt h1").html("<h1>犬山城下町で<br>食と遊びを届ける</h1>");
    } else {
      $(".appeal_txt h1").html("<h1>犬山城下町で食と遊びを届ける</h1>");
    }
  });

  //shops
  $(window).on("load resize", function () {
    let n_width = $(window).width();
    console.log(n_width);
    if (n_width < 1024) {
      $(".shop:nth-of-type(odd) .shop_frame").remove();
      $(".shop:nth-of-type(odd)").prepend(
        '<div class="shop_frame odd_color"><div class="shop_img"></div></div>'
      );
    } else {
      $(".shop:nth-of-type(odd) .shop_frame").remove();
      $(".shop:nth-of-type(odd)").append(
        '<div class="shop_frame odd_color"><div class="shop_img"></div></div>'
      );
    }
  });

  // scrollevent2 inview
  $(".v_inblur").on("inview", function (event, isInView) {
    if (isInView) {
      $(this).addClass("visible_blur");
    } else {
    }
  });
  $(".v_inup").one("inview", function (event, isInView) {
    $(this).addClass("visible_inup");
  });
  $(".appeal_txt").one("inview", function (event, isInView) {
    $(this).addClass("in_blur");
  });
  $(".ap_i").one("inview", function (event, isInView) {
    $(this).addClass("in_scale");
  });
  $(".shop").one("inview", function (event, isInView) {
    $(this).addClass("in_slide");
  });
  $(".pickup_one").one("inview", function (event, isInView) {
    $(this).addClass("in_slide");
  });
  $(".other_menu_img").one("inview", function (event, isInView) {
    $(this).addClass("in_slide");
  });
});
