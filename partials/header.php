<header class="mob-header">
    <a id="logo" href="index.php">Логотип</a>
    <div class="toggle"><span>Menu</span></div>
    <nav class="menu-container">
      <ul class="menu visually-hidden">
        <li><a href="about%20us.php">О студии</a></li>
        <li class="has-children"><a href="proekt.php">Коммерческие проекты<!-- <span id="arrow">more</span> --></a>
          <!-- <ul class="submenu">
            <li><a>Inlet (Бухта)</a></li>
            <li><a>Ресторан Чеснок</a></li>
            <li><a>Lullaby Bakery</a></li>
          </ul> -->
        </li>
        <li><a href="gallery.php">Дизайн интерьеров</a></li>
        <li><a href="example.php">Архитектура</a></li>
        <li><a href="#">Предметный дизайн</a></li>
        <li><a href="prodvizenie.php">Комплексный подход</a></li>
        <li><a href="price.php">Стоимость дизайна</a></li>
        <li><a href="contact.php">Контакты</a></li>        
      </ul>
    </nav>
  </header>

  <script>
var header          = $('header');
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
  header.toggleClass('is-visible');
  if(menu.hasClass('visually-hidden')) {
    menu.toggleClass('visually-hidden is-visible')
    i.addClass('overflowhidecs');
  } else {
    menu.removeClass('is-visible');
    i.removeClass('overflowhidecs');
    // Wait for CSS animation
    setTimeout(function() {
      header.removeClass('view-submenu');
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
  header.addClass('view-submenu');

  // Hide all the submenus...
  subMenu.hide();
  // ...except for the one being called
  $(this).parents('li').find('.submenu').show();
});
// Hide submenu
subHideToggle.on("click", function() {
  header.removeClass('view-submenu');
});

</script>