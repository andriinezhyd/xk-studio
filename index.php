<!DOCTYPE html>
<html lang="ru">
<head>  
  <?php include('partials/head.php')?>
  <title>Harchenko Studio Design</title>

  <!-- style preloader -->
  <style>

    @font-face {
        font-family: 'futurademicregular';
        src: url('fonts/futurademic-webfont.eot');
        src: url('fonts/futurademic-webfont.eot?#iefix') format('embedded-opentype'),
             url('fonts/futurademic-webfont.woff2') format('woff2'),
             url('fonts/futurademic-webfont.woff') format('woff'),
             url('fonts/futurademic-webfont.ttf') format('truetype'),
             url('fonts/futurademic-webfont.svg#futurademicregular') format('svg');
        font-weight: normal;
        font-style: normal;

    }

    #page-preloader {
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    background: rgb(36,36,36);
    z-index: 100500;
}
#page-preloader .spinner{
  width: 100px;
    height: 100px;
    position: absolute;
    left: 50%;
    top: 50%;
    /*background: url('images/loader_dark.gif') no-repeat 50% 50%;*/
    margin: -50px 0 0 -50px;
}
.path {
  stroke-dasharray: 1200;
  /*stroke-dashoffset: 20;*/
  animation: logo 2s linear normal 1;
}
.path1 {
  stroke-dasharray: 1200;
  /*stroke-dashoffset: 1000;*/
  animation: logo1 3s linear normal 1;
}
.path2 {
  stroke-dasharray: 1200;
  /*stroke-dashoffset: 1000;*/
  animation: logo2 6s linear normal 1;
}
@keyframes logo {
  from {
    stroke-dashoffset: 1200;
  }
  to {
    stroke-dashoffset: 0;
  }
}
@keyframes logo1 {
  from {
     stroke-dashoffset: 1200;
  }
  to {
    stroke-dashoffset: 0;
  }
}
@keyframes logo2 {
  from {
    stroke-dashoffset: 1200;
  }
  to {
    stroke-dashoffset: 0;
  }
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- preloader -->
<script>
  setTimeout(function(){
    var $preloader = $('#page-preloader'),
        $spinner = $preloader.find('.spinner');
    $spinner.fadeOut();
    $preloader.delay(350).fadeOut('slow'); 
}, 2750);
</script>

<!-- <script>

  $(window).on('load', function () {
    var $preloader = $('#page-preloader'),
        $spinner = $preloader.find('.spinner');
    $spinner.fadeOut();
    $preloader.delay(350).fadeOut('slow');
});
  </script> -->




<!-- preloader end -->

  <script>
    $(document).ready(function(){
      $("video").on("mouseover" , function(){
        this.play();
        $( this ).css( "background-color", "black" );
      });
      $("video").on("mouseleave",  function(){
        this.pause();
      })  
    })
  </script>
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
  <script type="text/javascript">
// 4. Пишем скрипт который создаст и отобразит карту Google Maps на странице.

// Определяем переменную map
var map;

// Функция initMap которая отрисует карту на странице
function initMap() {

    // В переменной map создаем объект карты GoogleMaps и вешаем эту переменную на <div id="map"></div>
    map = new google.maps.Map(document.getElementById('map'), {
        // При создании объекта карты необходимо указать его свойства
        // center - определяем точку на которой карта будет центрироваться
        center: {lat: 49.976112, lng: 36.254800},
        // zoom - определяет масштаб. 0 - видно всю платнеу. 18 - видно дома и улицы города.
        zoom: 17,
        scrollwheel: false,

        // Добавляем свои стили для отображения карты
        styles: [{"stylers":[{"saturation":-100},{"gamma":0.8},{"lightness":4},{"visibility":"on"}]},{"featureType":"landscape.natural","stylers":[{"visibility":"on"},{"color":"#5dff00"},{"gamma":4.97},{"lightness":-5},{"saturation":100}]}]
      });

    // Создаем маркер на карте
    var marker = new google.maps.Marker({

        // Определяем позицию маркера
        position: {lat: 49.976112, lng: 36.254800},

        // Указываем на какой карте он должен появится. (На странице ведь может быть больше одной карты)
        map: map,

        // Пишем название маркера - появится если навести на него курсор и немного подождать
        title: 'Наш маркер: XK-DESIGN',

        // Укажем свою иконку для маркера
        icon: 'img/formap.png'
      });

    // Создаем наполнение для информационного окна
    var contentString = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<h1 id="firstHeading" class="firstHeading">Студия XK-DESIGN</h1>'+
    '<div id="bodyContent">'+
          //'<p>Госуда́рственный академи́ческий Большо́й теа́тр Росси́и, или просто Большой театр — один из крупнейших' +
          //' в России и один из самых значительных в мире театров оперы и балета.</p>'+
          //'<p><b>Веб-сайт:</b> <a href="http://www.bolshoi.ru/" target="_blank">bolshoi.ru</a>'+
          '</p>'+
          '</div>'+
          '</div>';

    // Создаем информационное окно
    var infowindow = new google.maps.InfoWindow({
     content: contentString,
     maxWidth: 400
   });

    // Создаем прослушивание, по клику на маркер - открыть инфо-окно infowindow
    marker.addListener('click', function() {
      infowindow.open(map, marker);
    });


  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRgmjIBga6T0PG8zk8VGLA8Z0uvjTGx1o&callback=initMap"
async defer></script>

</head>
<body>
  <div id="page-preloader"><span class="spinner">
    <svg class="spinner" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="400px" height="400px" viewBox="0 0 400 400" enable-background="new 0 0 400 400" xml:space="preserve">
      <path class="path" fill="#242424" stroke="#fff" stroke-width="2" stroke-miterlimit="10" d="M50 50 ,350 50, 350 350, 50 350, 50 50z"/>
      <path class="path1" fill="#242424" stroke="#fff" stroke-width="3" stroke-miterlimit="10" d="M50 50 ,350 350z"/>
      <path class="path1" fill="#242424" stroke="#fff" stroke-width="3" stroke-miterlimit="10" d="M50 350 ,350 50z"/>
      <path class="path2" fill="#242424" stroke="#fff" stroke-width="3" stroke-miterlimit="10" d="M350 200 ,200 50z"/>
      <path class="path2" fill="#242424" stroke="#fff" stroke-width="3" stroke-miterlimit="10" d="M350 200 ,200 350z"/>
  </svg>
  </span></div>
  <div class="wrapper">
    <?php include('partials/header.php')?>
    <?php include('partials/sideBar.php')?>
    <div id="home">         
         <div class="bg-header">
              <a href="index.php"><img src="img/logo.png" alt="LOGO"></a>
              <div><img src="img/title.png" alt="d" style="width: 25%;
                margin: 5% 0 0 38%;"></div>
              <p>авторский дизайн<br> частной и коммерческой<br> недвижимости</p>
          		<!--<h1><b>ДИЗАЙН</b> КОТОРЫЙ<br> УВЕЛИЧИВАЕТ<br> <b>ПРИБЫЛЬ</b> НА 34% </h1>
              <p>Оформление и продвижение ресторанов, кафе,<br> офисов, магазинов, спорт клубов, гостиниц</p>-->
              <img src="img/scroll.gif" alt="">
          </div>
    </div>
<div class="block-portfolio" id="portfolio">
  <div class="left">
    <a href="proekt.php">
     <div class="mask">
       <video class="bgvideo1" muted="muted" loop onmouseover="this.play()" onmouseout="this.pause()" autobuffer="true" >
        <source src="videos/ostudii.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
        </video>
      </div>
    </a>
  </div>
  <div class="middle">
    <a href="layout/aqua.html"><div class="boxs box-mid-1"></div></a>
    <a href="layout/point.html"><div class="boxs box-mid-2"></div></a>
    <a href="layout/arch.html"><div class="boxs box-mid-3"></div></a>
    <a href="layout/berlinhouse.html"><div class="boxs box-mid-4"></div></a>
    <div class="box-big">

      <div class="mask text-in-box">
       <p>Работая с нами, клиент получает комплексное решение от дизайн-идеи до реализации проекта. Качественное техническое задание дает возможность понять и выявить ваши пожелания по проекту, создав функциональное и красивое пространство, отражающее аутентичные традиции и новые экспериментальные решения.</p>
     </div>

   </div>
 </div>
</a>
<div class="right">
  <div class="box-big1">

    <div class="mask text-in-box">

      <p><strong>Студия Harchenko design</strong><br> занимается разработкой и комплексной реализацией проектов под ключ. Наша команда проектирует 7 лет  на рынке Украины. Среди наших проектов есть объекты как частной, так и коммерческой недвижимости.</p>
    </div>
  </div>

  <a href="https://www.instagram.com/xkdesign/" target="_blank"><div class="boxs1 box-right-1"></div></a>
  <a href="about%20us.php"><div class="boxs1 box-right-2"></div></a>
  <a href="prodvizenie.php"><div class="boxs1 box-right-3"></div></a>
  <a href="case/case-vita-stom.html"><div class="boxs1 box-right-4"></div></a>
</div>  
</div> 			
<div class="block-gif">
  <span>ТОЛЬКО ТЕЛЕФОН<br> И МЫ В ДЕЛЕ</p></span>
  <div class="number">
    <p>Оставьте свой номер,<br> и мы обсудим ваш проект</p>
    <form action="script/telephone.php" method="post">
      <input type="tel" name="phone" id="phone" placeholder="Телефон" required>
      <input type="submit" value="">
    </form>
  </div>
</div>



<div class="block-contact-and-map" id="contact">
	<div class="contact">
		<h2>КОНТАКТЫ</h2>
		<div class="office contacts-general">
			<p><b>НАШ ОФИС</b>: <br><p class="for-office">пр.Гагарина 41/2</p>
		</div>
		<div class="phone-number contacts-general">
			<p><b>КАК С НАМИ СВЯЗАТЬСЯ:</b> <br> <p class="for-phone-number"><a href="tel:+380951715166" >+380951715166</a><br><a href="tel:+380577506747" >+380577506747</a></p></p>
		</div>
		<div class="email-direct contacts-general">
			<form action="mail.php" name="mail" method="post">
        <span><b>E-MAIL РАССЫЛКА</b></span><br>
        <label for="email">Опыт, идеи, новости ,<br> обратная связь<br>
         <input type="email" name="email" id="email" placeholder="ivanov@ivan.ru" required>
       </label>
       <input type="submit" value="" >
     </form>
   </div>
   <div class="social-button contacts-general">
     <p><b>СОЦИАЛЬНЫЕ СЕТИ</b></p>
     <ul>
      <li><a class="fb" href="https://www.facebook.com/xkdesingstudio/"></a></li>
      <li><a class="vk" href="https://vk.com/arthallkharkov"></a></li>
      <li><a class="yt" href="https://www.youtube.com/channel/UC2YH7AHz5TBPgUf1ccqUNRw"></a></li>
      <li><a class="in" href="https://www.instagram.com/xkdesign/"></a></li>
    </ul>
  </div>
  <a href="#openModal"><button>Связаться с менеджером</button></a>
</div>
<div  id="map" scrollwheel="false">

</div>
</div>
</div>



<!-- <div id="openModal" class="modalDialog">
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
</div> -->



</div>
<div class="wrap-mob">
<div class="screen">
<?php include('partials/header.php')?>
   <div class="main">
    <!-- <section class="picture"></section> -->
    <img src="img/mobile/i-content-mob.jpg" alt="" id="pic" oncontextmenu="return false;">
    <section class="i-main">
      <h1>Студия Harchenko design</h1>
      <p>занимается разработкой и комплексной реализацией проектов под ключ. Наша команда проектирует 7 лет на рынке Украины. Среди наших проектов есть объекты как частной так и коммерческой недвижимости.</p>
      <a href="about%20us.php">узнать больше...</a>
      <h2>мы разрабатываем</h2>
      <ul>
          <li><a href="">дизайн интерьера</a></li>
          <li><a href="">архитектура</a></li>
          <li><a href="">предметный дизайн</a></li>
      </ul>
    </section>
    <section class="i-portfolio">
        <h2>наши работы</h2>
        <div class="block-gallery">
            <a href="#" class="box-gallery1 box-gallery"><div class="shadowh"><h1 class="gallery-h1-1">Квартира на 23 Августа<br />90 м.кв</h1></div></a>      
            <a href="#" class="box-gallery2 box-gallery"><div class="shadowh"><h1 class="gallery-h1-2">ДОМ в Залютино<br />569 м.кв</h1></div></a>        
            <a href="#" class="box-gallery3 box-gallery"><div class="shadowh"><h1 class="gallery-h1-3">Апартаменты в Хорватии<br />67 м.кв</h1></div></a>
            <a href="#" class="box-gallery4 box-gallery"><div class="shadowh"><h1 class="gallery-h1-4">танхаус Berlin House<br />120 м.кв</h1></div></a>
        </div>
        <div class="svg-wrapper">
          <svg height="100" width="320" xmlns="http://www.w3.org/2000/svg">
            <rect class="shape" height="60" width="320" />
          </svg>
          <a href="" class="text i-link">смотреть портфолио</a>
        </div>
      </section>
  </div>
  <?php include('partials/footer.php')?>
</div>     <!-- end screen -->

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

  <!-- <div class="navigation-mob">
    <a href="index.html"><img src="img/logo-black.png" alt="LOGO" style="width:200px; margin: 4px 0px 0 5px;"></a>
    <div class='ad-menu'>
      <nav class='nav3' tabindex='1'>
        <ul>
          <li><a href='gallery-mob.html'>Дизайн</a></li>
          <li><a href='price-mob.html'>Стоимость</a></li>
          <li><a href='prodvizenie-mob.html'>Комплексный подход</a></li>
          <li><a href='about us-mob.html'>О студии</a></li>
          <li><a href='#contact-mob'>Контакты</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="mobile-block-top">
    <img src="img/title-mob.png" alt="d" style="width: 67%;
    margin: 5% 0 0 17%;">
  </div>
  <a href="gallery-mob.html"><div class="mobile-block-berlin">
   <h3></h3>
 </div>
</a>
<a href="gallery-mob.html"><div class="mobile-block-aqua">
 <h3></h3>
</div>
</a>
<a href="prodvizenie-mob.html"><div class="mobile-block-promotion">
 <h2>КОМПЛЕКСНЫЙ ПОДХОД</h2>
</div></a>
<a href="about us-mob.html"><div class="mobile-block-about">
 <h5></h5>
</div></a>
<div class="mobile-block-tel">
 <h6>ТОЛЬКО ТЕЛЕФОН<br> И МЫ В ДЕЛЕ</h6>
 <p>Оставьте номер, и мы обсудим все грани развития<br> вашего бизнеса</p>
 <form action="script/telephone.php" name="tel" method="post">
  <input type="tel" name="phone" id="phone" placeholder="Телефон">
  <input type="submit" value="">
</form>
</div>
<div class="mobile-block-contact" id="contact-mob">
 <div class="contact contact-for-mob">
  <h2>КОНТАКТЫ</h2>
  <div class="office contacts-general">
    <p><b>НАШ ОФИС</b>: <br><p class="for-office">пр.Гагарина 41/2</p>
  </div>
  <div class="phone-number contacts-general">
    <p><b>КАК С НАМИ СВЯЗАТЬСЯ:</b> <br> <p class="for-phone-number"><a href="tel:+380951715166" style="color:#505050;">+380951715166</a><br><a href="tel:+380577506747" >+380577506747</a></p></p>
  </div>
  <div class="email-direct contacts-general">
    <form action="mail.php" name="mail" method="post">
      <span><b>E-MAIL РАССЫЛКА</b></span><br>
      <label for="email">Опыт, идеи, новости ,<br> обратная связь<br>
        <input type="email" name="email" id="email" placeholder="ivanov@ivan.ru" required >
      </label>
      <input type="submit" value="" >
    </form>
  </div>
  <div class="social-button contacts-general">
    <p><b>СОЦИАЛЬНЫЕ СЕТИ</b></p>
    <ul>
      <li><a class="fb" href="https://www.facebook.com/xkdesingstudio/"></a></li>
      <li><a class="vk" href="https://vk.com/arthallkharkov"></a></li>
      <li><a class="yt" href="https://www.youtube.com/channel/UC2YH7AHz5TBPgUf1ccqUNRw"></a></li>
      <li><a class="in" href="https://www.instagram.com/xkdesign/"></a></li>
    </ul>
  </div>
  <a href="#openModal"><button>Связаться с менеджером</button></a>
</div>

</div> -->
<a href="#" class="scrollup">Наверх</a>
</div> <!-- end wrap-mob -->
</div>
</div>

</body>
</html>
