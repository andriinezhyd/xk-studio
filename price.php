<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
	<title>Стоимость дизайна</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animated.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/media.css">
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85696653-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter40214059 = new Ya.Metrika({
                    id:40214059,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/40214059" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body>

<div class="wrapper">
<header id="home">
	<?php include('partials/sideBar.php')?>
  <div class="top">
    <h1><a href="index.php" class="krosh">ГЛАВНАЯ</a> / <small><a href="price.php" class="active">СТОИМОСТЬ ДИЗАЙНА</a></small>  </h1>
    <a href="index.php"><img src="img/logo-black.png" alt="LOGO"></a>
  </div>
</header>
<div class="block-price">
  <ul>
    <li><a href="dizain.php" class="interer"><h4><b>дизайн</b> <br>интерьера</h4><div class="info animated fadeIn"><div class="info-text"><p>подробнее...</p></div></div></a></li>
    <li><a href="architek.html" class="architec"><h4><b>архитектурный</b> <br>проект</h4><div class="info2 animated fadeIn"><div class="info-text"><p>подробнее...</p></div></div></a></li>
    <li><a href="productdesign.html" class="item"><h4><b>предметный </b><br>дизайн</h4><div class="info3 animated fadeIn"><div class="info-text"><p>подробнее...</p></div></div></a></li>
    <li><a href="promotion.php" class="promotion"><h4><b>продвижение</b> <br>маркетинг</h4><div class="info4 animated fadeIn"><div class="info-text"><p>подробнее...</p></div></div></a></li>
  </ul>
</div>

<?php include('partials/footer.php')?>
</div>
</body>
</html>
