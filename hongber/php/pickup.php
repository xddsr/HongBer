<!-----------------------session start------------------------->
<?php
include "config.php";
session_start();
//error_reporting(0);
/*------------------------login/out---------------------------*/
if (!isset($_SESSION['hislog']) && !isset($_SESSION['uislog']) && !isset($_SESSION['naver_access_token']) && !isset($_SESSION['kakao_access_token'])) {
  echo "<script>alert('로그인후 이용하실 수 있습니다.'); location.href='/hongber/index.php'</script>";
}
if (!isset($_SESSION['uislog'])) {
} else {
  $uid = $_SESSION['uid'];
  $uemail = $_SESSION['uemail'];
  $usql = "SELECT * FROM user WHERE u_id = '$uid' AND u_email = '$uemail'";
  $ures = $connect->query($usql);
  $urow = $ures->fetch();
}
if (!isset($_SESSION['nislog'])) {
} else {
  $nid = $_SESSION['nid'];
  $nemail = $_SESSION['nemail'];
  $nsql = "SELECT * FROM nuser WHERE n_id = '$nid' AND n_email = '$nemail'";
  $nres = $connect->query($nsql);
  $nrow = $nres->fetch();
}
if (!isset($_SESSION['kislog'])) {
} else {
  $kid = $_SESSION['kid'];
  $kemail = $_SESSION['kemail'];
  $ksql = "SELECT * FROM kuser WHERE k_id = '$kid' AND k_email = '$kemail'";
  $kres = $connect->query($ksql);
  $krow = $kres->fetch();
}
?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-------------------------- CSS ----------------------------->
  <link rel="stylesheet" href="/hongber/css/reset.css">
  <link rel="stylesheet" href="/hongber/css/pickup.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!--------------------------- JS ------------------------------>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <title>PickUp</title>
</head>

<body>
  <!---------------------------nav------------------------------->
  <?php
  include "../header.php";
  ?>
  <!----------------------flex container-------------------------->
  <div id="wrap">
    <div class="swiper-container1 mySwiper1">
      <div class="swiper-wrapper">

        <?php
        $sql = "SELECT * FROM spread";
        $result = $connect->query($sql);
        while ($row = $result->fetch()) {
          $sql2 = "SELECT h_pimg FROM hser WHERE h_name = '$row[2]'";
          $result2 = $connect->query($sql2);
          $row2 = $result2->fetch();
          if (empty($row2['h_pimg'])) {
            $row2['h_pimg'] = "/hongber/css/image/bpimg.png";
          }
        ?>
          <div class="swiper-slide">
            <div class="pick_wrap">
              <div class="hm_thumb"><img src="<?= $row2['h_pimg'] ?>" alt=""></div>
              <div class="info">
                <p class="name_section"><?= $row['spread_name'] ?></p>
                <p class="Email_section"><?= $row['spread_id'] ?></p>
                <p class="day"><?= $row['spread_sd'] . "~" . $row['spread_ed'] ?></p>
              </div>
              <!------------------------- Swiper ---------------------------->
              <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <p class="h_intro"><?= $row['introduce_add'] ?></p>
                  </div>
                  <div class="swiper-slide"><img src=<?= $row['introduce_add_img'] ?>></div>
                  <div class="swiper-slide"><?= $row['introduce_prod'] ?></div>
                  <div class="swiper-slide"><img src=<?= $row['introduce_prod_img'] ?>></div>
                  <div class="swiper-slide"><?= $row['checklist'] ?></div>
                </div>
                <div class="swiper-button-next next"></div>
                <div class="swiper-button-prev prev"></div>
                <div class="swiper-pagination pag"></div>
              </div>
              <p class="i_intro">제품 소개</p>
              <button class="accept" onclick="pickupit()">줍기</button>
            </div>
          </div>
        <?php } ?>

      </div>
      <div class="swiper-button-next next1"></div>
      <div class="swiper-button-prev prev1"></div>
      <div class="swiper-pagination pag1"></div>
    </div>
  </div>
</body>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    keyboard: {
      enabled: true,
    },
    pagination: {
      el: ".pag",
      clickable: true,
    },
    navigation: {
      nextEl: ".next",
      prevEl: ".prev",
    },
  });
</script>
<script>
  var swiper = new Swiper(".mySwiper1", {
    slidesPerView: 1,
    spaceBetween: 30,

    pagination: {
      el: ".pag1",
      clickable: true
    },
    navigation: {
      nextEl: ".next1",
      prevEl: ".prev1",
    },
  });
</script>
<script>
  function pickupit() {
    <?php
    $sql3 = "INSERT INTO mypick(id, mypick_sd, mypick_ed, )";  
    ?>
    alert("JJI");
  }
</script>
<?php
$connect = null;
?>

</html>