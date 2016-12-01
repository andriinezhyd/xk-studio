<!DOCTYPE html>
<html lang="ru">
<head>
  <?php include('partials/head.php')?>
	<title>О студии</title>	
</head> 
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
      <div class="mobile-block-top-about">
       <h1>СТУДИЯ<br> HARCHENKO DESIGN</h1>
       <p>Создание авторского дизайна с функциональной организацией 
        пространства, интерьер и экстерьер в котором 
        продуманна каждая деталь.</p>
      </div>
      <div class="mobile-block-history">
       <h2>ИСТОРИЯ</h2>
       <p>Студия «ХК-design» существует с 2009 года и работает на территории Украины в сфере дизайна и маркетингового продвижения. 
        Слаженный коллектив профессионалов и качественная работа — ключ к успеху «ХК-design» и доверию клиентов. 
        Мы занимаемся, жилыми и общественными интерьерами, архитектурным проектированием, 
        создавая полный комплекс услуг от разработки бренда до реализации дизайн-проекта.</p>
      </div>
      <div class="mobile-block-studia">
       <h3><b style="color:#979595;">ДВА НАПРАВЛЕНИЯ</b> </h3>
       <div class="direction-dizain">
        <p>Дизайн</p>
        <br>
        <span>Специализируемся на разработке коммерческой и частной недвижимости</span>
        <img src="img/icon-big-1.png" alt="" style="width:21%; float:right;margin:-16% 0 0 0">
      </div>
      <div class="direction-prod">
        <p>Продвижение</p>
        <br>
        <span>Создаем уникальные решения ваших бизнес-целей и налаживаем контакт с аудиторией.</span>
        <img src="img/icon-big-2.png" alt="" style="width:21%; float:right;margin:-16% 0 0 0"></div>
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
var i             = $('body');

// Toggle menu
toggle.on("click", function() {
  nav.toggleClass('is-visible');
  if(menu.hasClass('visually-hidden')) {
    menu.toggleClass('visually-hidden is-visible')
    i.addClass('overflowhidecs');
  } else {
    menu.removeClass('is-visible');
    i.removeClass('overflowhidecs');
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
  i.addClass('overflowhidecs');
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
<a href="#" class="scrollup">Наверх</a>
<?php include('partials/footer.php')?>
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
 
</body>
</html>