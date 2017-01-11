<!DOCTYPE html>
<html lang="ru">
<head>
	<?php include('partials/head.php')?>
	<title>Архитектура</title>
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



<?php include('partials/footer.php')?>
</div>
<div class="wrap-mob">
	<div class="screen">
		<?php include('partials/header.php')?>
		<div class="main">
			
</div>
<?php include('partials/footer.php')?>
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
</body>
</html>





