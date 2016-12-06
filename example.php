<!DOCTYPE html>
<html lang="ru">
<head>
	<?php include('partials/head.php')?>
	<title>О студии</title>
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
    <h1><a href="index.php" class="krosh">ГЛАВНАЯ</a> / <small><a href="" class="active">КОНТАКТЫ</a></small></h1>
    <a href="index.php"><img src="img/logo-black.png" alt="LOGO"></a>
  </div>
</header>
<div class="block-contact-and-map" id="contact">
	<div class="contact">
		<h2>КОНТАКТЫ</h2>
		<div class="office contacts-general">
			<p><b class="line">НАШ ОФИС</b>
      <p class="for-office">пр.Гагарина 41/2</p>
		</div>
		<div class="phone-number contacts-general">
			<p class="line"><b>КАК С НАМИ СВЯЗАТЬСЯ</b></p>
      <p class="for-phone-number"><a href="tel:+380951715166" >+380951715166</a><br><a href="tel:+380577506747" >+380577506747</a></p>
		</div>
		<div class="email-direct contacts-general">
			<form action="mail.php" name="mail" method="post">
        		<span><b class="line">E-MAIL РАССЫЛКА</b></span><br>
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
<div class="wrap-mob">
	<div class="screen">
		<?php include('partials/header.php')?>
		<div class="main">
			<div class="block-contact-and-map" id="contact">
				<div class="contact">
					<h2>КОНТАКТЫ</h2>
					<div class="phone-number contacts-general">
						<p><!-- <b>КАК С НАМИ СВЯЗАТЬСЯ</b> <br> --> <span class="for-phone-number"><a href="tel:+380951715166" >(095) 171 51 66</a><br><a href="tel:+380577506747" >(057) 750 67 47</a></span></p>
					</div>
					<div class="office contacts-general">
						<p><!-- <b>НАШ ОФИС</b> <br> --><span class="for-office">пр.Гагарина 41\2</span></p>
					</div>
					<div class="maps">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2565.875094281557!2d36.2525408149933!3d49.97620092930463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a08705e523a5%3A0xc78b79db11af682a!2sXK+design+studio!5e0!3m2!1sru!2sua!4v1480983945841" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<!-- <div class="email-direct contacts-general">
						<form action="mail.php" name="mail" method="post">
							<span><b>E-MAIL РАССЫЛКА</b></span><br>
							<label for="email">Опыт, идеи, новости ,<br> обратная связь<br>
								<input type="email" name="email" id="email" placeholder="ivanov@ivan.ru" required>
							</label>
							<input type="submit" value="" >
						</form>
					</div> -->
					<a href="#openModal"><button>Связаться с менеджером</button></a>
					<div class="social-button contacts-general">
						<!-- <p><b>СОЦИАЛЬНЫЕ СЕТИ</b></p> -->
						<ul>
							<li><a class="fb" href="https://www.facebook.com/xkdesingstudio/"></a></li>
							<li><a class="vk" href="https://vk.com/arthallkharkov"></a></li>
							<li><a class="yt" href="https://www.youtube.com/channel/UC2YH7AHz5TBPgUf1ccqUNRw"></a></li>
							<li><a class="in" href="https://www.instagram.com/xkdesign/"></a></li>
						</ul>
					</div>
					
				</div>
      <!-- <div  id="map" scrollwheel="false" style="height:850px;">

  </div> -->
</div>
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





