<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>Harchenko Studio Design</title>
  <link rel="stylesheet" href="css/style.css" media="only screen and (min-width:581px)">
  <link rel="stylesheet" href="css/animated.css">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="css/hover.css">
  <link rel="stylesheet" href="css/mobile/all.css" media="only screen and (max-width:580px)">
  <link rel="stylesheet" href="css/media.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <!-- <link rel="stylesheet" href="css/mobile.css"  media="only screen and (max-width:580px)"> -->

  <!-- style preloader -->
  <style>
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


<!--  Создаём кнопку возврата вверх страницы -->
<script type="text/javascript">
$(document).ready(function(){
 
$(window).scroll(function(){
if ($(this).scrollTop() > 1000) {
$('.scrollup').fadeIn();
} else {
$('.scrollup').fadeOut();
}
});
 
$('.scrollup').click(function(){
$("html, body").animate({ scrollTop: 0 }, 600);
return false;
});
 
});
</script>

</head>