<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>Контакты</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/animated.css">
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
  <script type="text/javascript" src="js/carousel.js"></script>  
  <link rel="stylesheet" type="text/css" href="css/styles-carousel.css">  
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/hover.css">
  <link rel="stylesheet" href="css/media.css">
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
<div class="wrapper">
<header id="home">
  <?php include('partials/sideBar.php')?>
  <div class="top">
    <h1><a href="index.php" class="krosh">ГЛАВНАЯ</a> / <small><a href="" class="active">КОНТАКТЫ</a></small></h1>
    <a href="index.php"><img src="img/logo-black.png" alt="LOGO"></a>
  </div>
</header>
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
<div  id="map" scrollwheel="false" style="height:850px;">
   
  </div>
</div>
</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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





