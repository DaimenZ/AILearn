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
                <h1>Perhotelan</h1>
                <p>Penggunaan dari Artificial Intelligence pada bidang perhotelan memegang peran penting dikarenakan kemampuannya untuk melakukan pekerjaan manusia tanpa mengenal waktu sehingga dapat membantu pemilik hotel untuk menawarkan jasa yang luar biasa kepada tamu-tamunya dan pelayanan yang baik merupakan hal utama yang harus diperhatikan pada bidang ini.
                    Untuk penggunaan A.I. diaplikasikan dengan adanya robot yang melayani jasa dengan melakukan percakapan dengan tamu, chatbots, dan analisis data untuk mendapat informasi mengenai tamu dan review mereka mengenai hotel tertentu.
                    </p>
            </div>
            <div id="content1B">
                    <img id="image1" src="../resources/Assets/AI dalam perhotelan.jpg" />
                <!--<a><img id="image1" src="resources/images/aihealthcare1.jpg"></a> -->
                <p>Analisis A.I. dalam Perhotelan</p>
            </div>

            <div id="content2">
                <div class="splide">
                    <h1>Video Terkait</h1>
                    <div class="splide__slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=ifgf6bZhxiE">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/ifgf6bZhxiE/mqdefault.jpg">
                                    </div>
                                    <h2>Hilton and IBM pilot “Connie”, the world’s first Watson-enabled Hotel Concierge </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=bpOB4vE5P5g">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/bpOB4vE5P5g/mqdefault.jpg">
                                    </div>
                                    <h2>Meet Sam: FCM's friendly travel-intelligent chatbot! </h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=-odTtydTKsM">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/-odTtydTKsM/mqdefault.jpg">
                                    </div>
                                    <h2>Alibaba Opens AI "Future Hotel"</h2>
                                </li>
                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=lyx3eCSvfO4">
                                    <div class="splide__slide__container">
                                        <img src="https://img.youtube.com/vi/lyx3eCSvfO4/mqdefault.jpg">
                                    </div>
                                    <h2> How A.I. can Enhance the Guest Experience | Benjamin Calleja - Livit | HotelSpaces </h2>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div id="content3">
                <h1>Artikel Terkait</h1>
                <a href="https://towardsdatascience.com/the-impact-of-ai-on-the-hospitality-industry-8ba7adb66be?gi=7a4f074d362b#:~:text=More%20and%20more%20hotels%2C%20especially%20large%20global%20hotel,current%20industry%20standards%20on%20a%20personalized%20guest%20experience.">
                    <button class="linkPreview">
                        <img src="../resources/Assets/perhotelan1.jpg">
                        <h2>The Impact of AI on the Hospitality Industry</h2>
                        <p>With technology becoming more and more sophisticated, it has disrupted almost all industries across the world.
                            The hospitality industry is one such industry that has seen the rise of technology significantly impacting the
                            way that hotels operate and perform today. Countless hospitality industry leaders are increasingly leveraging
                            the use of one specific tool in their hotels to increase personalization and exceed customer expectations:
                            artificial intelligence or more commonly known as AI. (Oxford).
                        </p>
                    </button>
                </a>
                <a href="https://www.reviewpro.com/blog/ai-for-hotels-guest-experience/">
                    <button class="linkPreview">
                        <img src="../resources/Assets/perhotelan2.jpg">
                        <h2>AI for Hotels: Empowering the Guest Experience</h2>
                        <p>Today, Artificial Intelligence is built into many of the applications we use in our everyday lives. AI for hotels will enable increased efficiency staff and a better guest experience before during and after the stay.</p>
                    </button>
                </a>
            </div>

        </div>
    </body>
</html>
