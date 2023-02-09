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

  //access
  $("#map-change").change(() => {
    let map_url;
    let val = $("#map-change option:selected").val();
    console.log(val);

    if (val == "shop1") {
      map_url =
        "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15099.682583582993!2d136.93561865408537!3d35.11771408659533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60037a5334d3fae1%3A0x34b5806f445a45f9!2z44Kk44Kq44Oz44Oi44O844Or5paw55Ge5qmL!5e0!3m2!1sja!2sjp!4v1675955915781!5m2!1sja!2sjp";
    } else if (val == "shop2") {
      map_url =
        "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22095.119429347462!2d136.89309542178896!3d35.16231592564255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6003772c44f4f335%3A0x3947d91f2b70d713!2z5ZCN5Y-k5bGL5biC56eR5a2m6aSo!5e0!3m2!1sja!2sjp!4v1675955995064!5m2!1sja!2sjp";
    }

    $(".g_map iframe").attr("src", map_url);
    // $(".g_map a").attr("href", map_url);
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
