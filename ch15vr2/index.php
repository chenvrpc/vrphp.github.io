<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head>
    <meta charset="utf-8" />
    <title>Virtual Reality</title>
    <meta name="description" content="全景創建工作室資訊" />
    <link rel="icon" type="image/png" href="images/faviconvr5.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link
      href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c"
      rel="stylesheet"
    />
    <link href="css/style.css" rel="stylesheet" />
    <!-- include jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>

  <body>
    <div id="home" class="big-bg">
      <header class="page-header wrapper">
        <h1>
          <a href="index.php"
            ><img class="logo" src="images/logovr1.svg" alt="VR 首頁"
          /></a>
        </h1>
        <nav>
          <ul class="main-nav">
            <li><a href="news.php">News</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li>
              <a href="https://tw.panocreator.net/html5/" rel="stylesheet"
                >Login</a
              >
            </li>
          </ul>
        </nav>
      </header>

      <div class="home-content wrapper">
        <h2 class="page-title">提供全景圖虛擬實境應用</h2>
        <p class="white">
          如果需要全景拍攝,360度拍攝或VR內容的製作,請交給全景工作室來完成。
        </p>
        <a class="button" href="menu.html">範例介紹</a>
        <a class="button5" href="mailto:canyon53@hotmail.com">聯絡我們</a>
      </div>
      <!-- /.home-content -->
    </div>
    <!-- /#home -->
  </body>

  <!-- BackTop-->
  <button type="button" id="BackTop" class="toTop-arrow"></button>
  <script>
    $(function () {
      $("#BackTop").click(function () {
        $("html,body").animate({ scrollTop: 0 }, 333);
      });
      $(window)
        .scroll(function () {
          if ($(this).scrollTop() > 300) {
            $("#BackTop").fadeIn(222);
          } else {
            $("#BackTop").stop().fadeOut(222);
          }
        })
        .scroll();
    });
  </script>
</html>
