<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Предметный дизайн</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animated.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" href="css/media.css">	
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
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
<div class="block-gallery">
    
        <div class="tabbed">
            <ul class="simplefilter">    
                <li class="active" data-filter="all"><a href="#">Все</a></li>
                <li data-filter="1"><a href="#">Мебель</a></li>
                <li data-filter="3"><a href="#">Декор</a></li>
                <li data-filter="4"><a href="#">Свет</a></li>
                <li data-filter="2"><a href="#">Декоративные материалы</a></li>             
                <li data-filter="6"><a href="#">Посуда</a></li>                
            </ul>
        </div>

        <!-- Filter Controls - Multifilter Mode -->
        <!-- <div class="row">
            A basic setup of multifilter controls, when the user toggles a category
            the corresponding items are rendered or hidden
            <ul class="multifilter">
                Multifilter controls:
                <li data-multifilter="1">Cityscape</li>
                <li data-multifilter="2">Landscape</li>
                <li data-multifilter="3">Industrial</li>
            </ul>
        </div> -->

        <!-- Shuffle & Sort Controls -->
        <!-- <div class="row">
            <ul class="sortandshuffle">
                Sort &amp; Shuffle controls:
                Basic shuffle control
                <li class="shuffle-btn" data-shuffle>Shuffle</li>
                Basic sort controls consisting of asc/desc button and a select
                <li class="sort-btn active" data-sortAsc>Asc</li>
                <li class="sort-btn" data-sortDesc>Desc</li>
                <select data-sortOrder>
                    <option value="domIndex">
                        Position
                    </option>
                    <option value="sortData">
                        Description
                    </option>
                </select>
            </ul>
        </div> -->

        <!-- Search control -->
        <!-- <div class="row search-row">
            Поиск проекта:
            <input type="text" class="filtr-search" name="filtr-search" data-search>
        </div> -->

        <div>
            <!-- This is the set up of a basic gallery, your items must have the categories they belong to in a data-category
            attribute, which starts from the value 1 and goes up from there -->
            <div class="filtr-container product-list">
                <div class="filtr-item small vis" onclick="return location.href = 'layout/point.php'" data-category="3" data-sort="Busy streets">
                    <img class="img-responsive" src="img/object-design/point.png" alt="sample image">
                    <span class="item-desc"></span>
                </div>
                <div class="filtr-item small " onclick="return location.href = 'layout/inlet.php'" data-category="4" data-sort="Luminous night">
                    <img class="img-responsive" src="img/gallery/buhta.jpg" alt="sample image">
                    <span class="item-desc">Inlet(Бухта)</span>
                </div>
                <div class="filtr-item small " onclick="return location.href = 'layout/berlin.php'" data-category="1" data-sort="City wonders">
                    <img class="img-responsive" src="img/gallery/berlin.jpg" alt="sample image">
                    <span class="item-desc">Berlin House</span>
                </div>
                <div class="filtr-item small " onclick="return location.href = 'layout/chesnok.php'" data-category="4" data-sort="In production">
                    <img class="img-responsive" src="img/gallery/chesnok.jpg" alt="sample image">
                    <span class="item-desc">Ресторан "Чesnok"</span>
                </div>
                <div class="filtr-item small " onclick="return location.href = 'layout/robert.php'" data-category="2" data-sort="Industrial site">
                    <img class="img-responsive" src="img/gallery/robert.jpg" alt="sample image">
                    <span class="item-desc">RobertClay</span>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Include jQuery & Filterizr -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="js/filterizr/jquery.filterizr.js"></script>
    <script src="js/controls.js"></script>

    <!-- Kick off Filterizr -->
    <script type="text/javascript">
        $(function() {
            //Initialize filterizr with default options
            $('.filtr-container').filterizr();
        });
    </script>
<?php include('partials/footer.php')?>
</div>
</body>
</html>
