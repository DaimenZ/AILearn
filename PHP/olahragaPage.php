<?php //tess
  require 'functions.php';
  if(isset($_COOKIE['key']) && isset($_COOKIE['key2'])){
    $id = $_COOKIE['key'];
    $key = $_COOKIE['key2'];

    $result = mysqli_query($conn, "SELECT username FROM
      users WHERE id = $id");

    $row = mysqli_fetch_assoc($result);

    if($key === hash('sha256', $row['username'])){
      $_SESSION['masuk'] = true;
    }
  }

//sss ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Major Mono Display' rel='stylesheet'>
        <link rel="stylesheet" href="../CSS/outline.css">
        <link rel="stylesheet" href="../CSS/articlePageCSS.css">
        <script src="../JS/articlePageJS.js"></script>
        <script src="../external/slidePlugin.js"></script>
        <link rel="stylesheet" href="../external/slidePlugin.css">
        <script src="../external/videoPlugin.js"></script>
        <link rel="stylesheet" href="../external/videoPlugin.css">

        <title>asuransi page</title>
    </head>
    <body>
      <div class="navPlaceHolder"></div>
      <div class="navBar">
          <h1>aIlearn</h1>
          <div id="searchForm">
              <form role="search" id="form" action="cari.php" method="post">
                  <input type="text" id="query" name="cari" placeholder="Cari..." autocomplete="off">
                  <button id="searchImg">
                    <img id= "searchLogo" src="../resources/logos/logo search ailearn.png">
                  </button>
                </form>
          </div>

          <?php if(isset($_SESSION['masuk'])) : ?>
          <!--Login-->
          <div class="secNav">
              <a class="landing" href="fPage.php"><img src="../resources/logos/home.svg"></a>
              <a class="forum" href="forum.php"><img src="../resources/logos/forum.svg"></a>
              <div class="user">
                  <div class="userButton">
                      <div class="userButton2"><img src="../resources/logos/user.svg"></div>
                  </div>
                  <div class="userMenu">
                      <a class="user1" href="profile.php">Edit Profil</a>
                      <a class="user2" href="logout.php">Logout</a>
                  </div>
              </div>
          </div>


          <!--Normal-->
          <?php else :?>
          <div class="firstNav activeNav">
              <a id="home" href="fPage.php"><span class="blot0"></span>Beranda</a>
              <a id="login" href="login.php"><span class="blot0"></span>Masuk</a>
          </div>
          <?php endif;?>


      </div>
        <div class="footer">
            <h3>@2021. All rights reserved.</h3>
            <a class="igLink" href="https://www.instagram.com/"><img class="ig" src="../resources/logos/instagram.svg"></a>

            <a class="ytLink" href="https://www.youtube.com/"><img class="yt" src="../resources/logos/youtube.svg"></a>

          </div>
        <div class="gridContainer">
            <div id="content1A">
                <h1>Olah Raga</h1>
                <p>Baru – baru ini teknologi Ai diterapkan dalam bidang olah raga.
                     ternyata dapat membantu menganalisa performance para atlet dan untuk berlatih
                     menumbuhkan potensi mereka. Aplikasi berbasis AI ini didukung oleh teknologi
                     machine learning dan computer vision. Aplikasi berbasis AI ini dapat memberikan
                     analisis secara langsung yang akan membantu para atlet yang berlatih
                     untuk meningkatkan dan mengembangkan kemampuan mereka. </p>
            </div>
            <div id="content1B">
                    <img id="image1" src="../resources/Assets/AI dalam OlahRaga.jpg" />
                <!--<a><img id="image1" src="resources/images/aihealthcare1.jpg"></a> -->
                <p>Analisis A.I. dalam Olahraga</p>
            </div>

            <div id="content2">
                <div class="splide">
                    <h1>Video Terkait</h1>
                    <div class="splide__slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=tX0ou7oZ4Jg">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/tX0ou7oZ4Jg/mqdefault.jpg">
                                    </div>
                                    <h2>5 Uses of Artificial Intelligence in SPORTS! - 5 Mins 5 Ideas</h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=oUvvfHkXyOA">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/oUvvfHkXyOA/mqdefault.jpg">
                                    </div>
                                    <h2>How data transformed the NBA | The Economist</h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=yLrOy2Xedgk">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/yLrOy2Xedgk/mqdefault.jpg">
                                    </div>
                                    <h2>Can AI make me a better athlete? | Using machine learning to analyze penalty kicks</h2>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div id="content3">
                <h1>Artikel Terkait</h1>
                <a href="https://kumparan.com/how-to-tekno/3-robot-ini-bisa-bantu-atlet-latihan-olahraga-1vV3CS60HJk">
                    <button class="linkPreview">
                        <img src="../resources/Assets/olahraga1.jpg">
                        <h2>3 Robot Ini Bisa Bantu Atlet Latihan Olahraga</h2>
                        <p>Perkembangan teknologi yang semakin maju membuat manusia dimudahkan dalam segala hal. Salah satu teknologi terkemuka yang dapat membantu manusia adalah robot.
                            Dalam perkembangannya, ada beberapa robot yang dapat membantu para atlet olahraga untuk menjaga kemampuannya. Berikut adalah tiga robot yang mampu membantu para atlet.
                        </p>
                    </button>
                </a>
                <a href="https://infokomputer.grid.id/read/121799663/nba-gandeng-perusahaan-berbasis-ai-untuk-tingkatkan-kemampuan-pebasket">
                    <button class="linkPreview">
                        <img src="../resources/Assets/AI dalam Olah Raga 2.jpg">
                        <h2>NBA Gandeng Perusahaan Berbasis AI untuk Tingkatkan Kemampuan Pebasket</h2>
                        <p>Teknologi artificial intelligence (AI) sudah mulai diterapkan di berbagai bidang, termasuk olah raga. Baru-baru ini National Basketball Association (NBA) mengumumkan kerja sama strategis dengan dan kepemilikan saham di NEX Team Inc., perusahaan kecerdasan buatan (artificial intelligence) untuk perangkat mobile terkemuka dan pengembang HomeCourt, aplikasi pelatihan basket yang didukung teknologi pembelajaran mesin (machine learning) dan visi komputer (computer vision, CV), yang dapat membuka serta menumbuhkan potensi setiap pemain basket.</p>
                    </button>
                </a>
            </div>

        </div>
    </body>
</html>
