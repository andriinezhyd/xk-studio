<!DOCTYPE html>
<html lang="ru">
<head>
  <?php include('partials/head.php')?>
  <title>Стоимость дизайна</title>
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
<header>
  <?php include('partials/sideBar.php')?>
  <?php include('partials/top.php')?>
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
<div class="wrap-mob">
    <div class="screen">
     <?php include('partials/header.php')?>
      <div class="main">
        <div class="mobile-block-inter">
     <h1>ДИЗАЙН <br>ИНТЕРЬЕРОВ</h1>
     <p>120 грн/м2 до 250 грн/м2</p>
   </div>
   <div class="mobile-block-arch">
     <h2>АРХИТЕКТУРНЫЙ <br>ПРОЕКТ </h2>
     <p>5 $/м2 до 25 $/м2</p>
   </div>
   <div class="mobile-block-pred">
     <h3>ПРЕДМЕТНЫЙ<br> ДИЗАЙН</h3>
     <p>1000 грн до 3000 грн</p>
   </div>
   <div class="mobile-block-prod">
     <h4>ПРОДВИЖЕНИЕ<br> МАРКЕТИНГ</h4>
     <p>1000 грн до 20000 грн</p>
   </div>
   <a href="price-list.xlsx" target="_blank" class="download-pres">
     <div class="mobile-block-price-list">
       
       <i class="fa fa-file-excel-o" aria-hidden="true" style="color:#aeaeb1;"></i>
       <h5><b style="color:#396cbf;">СКАЧАТЬ</b> <br><b style="font-size: 29px;">ПРАЙС-ЛИСТ</b></h5>
       <i class="fa fa1 fa-arrow-down" aria-hidden="true" style="color:#396cbf;"></i>

     </div></a>
     <div class="mobile-block-tel">
       <h6>Мы создаем проект<br> под ключ<br> от дизайна до реализации</h6>
       <p>Оставьте свой номер,<br> и мы обсудим ваш проект</p>
       <form action="script/telephone.php" name="tel" method="post">
        <input type="tel" name="phone" id="phone" placeholder="Телефон" required>
        <input type="submit" value="">
      </form>
    </div>        
        <?php include('partials/footer.php')?>
    <!-- <div id="openModal" class="modalDialog">
     <div>
      <a href="#close" title="Close" class="close"><img src="img/close.png" alt=""></a>
      <h2>ОСТАВЬТЕ СВОИ КОНТАКТНЫЕ ДАННЫЕ</h2>
      <p>Наш менеджер перезвонит вам в ближайшее время</p>
      <form>
        <p>
          <input type="text" name="name" id="name" placeholder="Ваше имя" required>
          <input type="tel" name="phone" id="phone" placeholder="Ваш телефон" required>
        </p>
        <input type="submit" value="Связаться с менеджером">
      </form>
    
    </div>
  </div> -->
</div>
</div>     <!-- end screen -->
<!-- <script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>  -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<a href="#" class="scrollup">Наверх</a>
<!-- <div class="navigation-mob">
<a href="index.html"><img src="img/logo-black.png" alt="LOGO" style="width:200px;margin: 4px 0px 0 5px;"></a>
<div class='ad-menu'>
  <nav class='nav3' tabindex='1'>
    <ul>
      <li><a href='gallery-mob.html'>Дизайн</a></li>
      <li><a href='price-mob.html'>Стоимость</a></li>
      <li><a href='prodvizenie-mob.html'>комплексный подход</a></li>
      <li><a href='about us-mob.html'>О студии</a></li>
      <li><a href='index.html#contact-mob'>Контакты</a></li>
    </ul>
  </nav>
</div>
</div> -->
</div>
<div id="openModal" class="modalDialog">
   <div>
      <a href="#close" title="Close" class="close"><img src="img/close.png" alt=""></a>
      <h2>ОСТАВЬТЕ СВОИ КОНТАКТНЫЕ ДАННЫЕ</h2>
      <p>Наш менеджер перезвонит вам в ближайшее время</p>
      <form action="script/manager.php" method="post">
        <p>
        <input type="text" name="name" id="name" placeholder="Ваше имя" required>
        <input type="tel" name="phone" id="phone" placeholder="Ваш телефон" required>
        </p>
        <input type="submit" value="Связаться с менеджером">
      </form>

   </div>
</div>
</body>
</html>





