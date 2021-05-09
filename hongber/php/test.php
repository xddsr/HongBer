<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Swiper demo</title>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Demo styles -->
  <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper-container {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .swiper-container-v {
      background: #eee;
    }

    .pagh2 {
      margin-bottom: 20px;
    }
    .next2 {
      margin: 0 50px 0 50px;
    }
    .prev2 {
      margin: 0 50px 0 50px;
    }
  </style>
</head>

<body>
  <!-- Swiper -->

  <div class="swiper-container mySwiper swiper-container-h">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Horizontal Slide 1</div>
      <div class="swiper-slide">
        <div class="swiper-container mySwiper2 swiper-container-v">
          <div class="swiper-wrapper">
            <div class="swiper-slide">Vertical Slide 1</div>
            <div class="swiper-slide">Vertical Slide 2</div>
            <div class="swiper-slide">Vertical Slide 3</div>
            <div class="swiper-slide">Vertical Slide 4</div>
            <div class="swiper-slide">Vertical Slide 5</div>
          </div>
          <div class="swiper-button-next next2"></div>
          <div class="swiper-button-prev prev2"></div>
          <div class="swiper-pagination pagh2"></div>
        </div>
      </div>
      <div class="swiper-slide">Horizontal Slide 3</div>
      <div class="swiper-slide">Horizontal Slide 4</div>
    </div>
    <div class="swiper-button-next next"></div>
    <div class="swiper-button-prev prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 50,
      loop: true,
      keyboard: {
        enabled: true,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".next",
        prevEl: ".prev",
      },
    });
    var swiper2 = new Swiper(".mySwiper2", {
      spaceBetween: 50,
      loop: true,
      keyboard: {
        enabled: true,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".next2",
        prevEl: ".prev2",
      },
    });
  </script>
</body>

</html>