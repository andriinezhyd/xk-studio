<!DOCTYPE html>
<html lang="ru">
<?php include('partials/head.php')?>
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
    <header id="home">
   <?php include('partials/sideBar.php')?>
  <div class="bg-header col-16">
    <a href="index.php"><img src="img/logo.png" alt="LOGO"></a>
    <div><img src="img/title.png" alt="d" style="width: 25%;
      margin: 5% 0 0 38%;"></div>
      <p>авторский дизайн<br> частной и коммерческой<br> недвижимости</p>
		<!--<h1><b>ДИЗАЙН</b> КОТОРЫЙ<br> УВЕЛИЧИВАЕТ<br> <b>ПРИБЫЛЬ</b> НА 34% </h1>
    <p>Оформление и продвижение ресторанов, кафе,<br> офисов, магазинов, спорт клубов, гостиниц</p>-->
    <img src="img/scroll.gif" alt="">
  </div>
</header>
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
  <a href="about us.php"><div class="boxs1 box-right-2"></div></a>
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
  <nav>
    <a id="logo" href="http://localhost/hk-studio/index.php">Логотип</a>
    <div class="toggle"><span>Menu</span></div>
    <div class="menu-container">
      <ul class="menu visually-hidden">
        <li><a>О студии</a></li>
        <li class="has-children"><a>Коммерческие проекты<span>more</span></a>
          <ul class="submenu">
            <li><a>Inlet (Бухта)</a></li>
            <li><a>Ресторан Чеснок</a></li>
            <li><a>Lullaby Bakery</a></li>
          </ul>
        </li>
        <li><a>Дизайн интерьеров</a></li>
        <li><a>Архитектура</a></li>
        <li><a>Предметный дизайн</a></li>
        <li><a>Комплексный подход</a></li>
        <li><a>Стоимость дизайна</a></li>
        <li><a>Блог</a></li>
        <li><a>Контакты</a></li>        
      </ul>
    </div>
  </nav>
  <div class="main">
    <!-- <section class="picture"></section> -->
    <img src="img/mobile/i-content-mob.jpg" alt="" id="pic">
    <section class="i-main">
      <h1>Студия Harchenko design</h1>
      <p>занимается разработкой и комплексной реализацией проектов под ключ. Наша команда проектирует 7 лет на рынке Украины. Среди наших проектов есть объекты как частной так и коммерческой недвижимости.</p>
      <a href="#">узнать больше...</a>
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
        <a class="i-link" href="#">смотреть портфолио</a>
      </section>
  </div>
</div>
<script src="http://code.jquery.com/jquery-3.0.0.min.js"></script> 
<script>
var nav           = $('nav');
var menu          = $('.menu');
var menuContainer = $('.menu-container');
var subMenu       = $('.submenu');
var toggle        = $('.toggle');
var subToggle     = $('.has-children span');
var back          = '<div class="hide-submenu"></div>';
var subHide       = $(back);

// Toggle menu
toggle.on("click", function() {
  nav.toggleClass('is-visible');
  if(menu.hasClass('visually-hidden')) {
    menu.toggleClass('visually-hidden is-visible')
  } else {
    menu.removeClass('is-visible');
    // Wait for CSS animation
    setTimeout(function() {
      nav.removeClass('view-submenu');
      menu.addClass('visually-hidden');
    }, 200);
  }
});

// Add submenu hide bar
subHide.prependTo(subMenu);
var subHideToggle = $('.hide-submenu');

// Show submenu
subToggle.on("click", function() {
  nav.addClass('view-submenu');
  // Hide all the submenus...
  subMenu.hide();
  // ...except for the one being called
  $(this).parents('li').find('.submenu').show();
});
// Hide submenu
subHideToggle.on("click", function() {
  nav.removeClass('view-submenu');
});

</script>
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
</div>
</div>
</div>

</body>
</html>
