<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Дизайн интерьеров</title>
	<?php include('partials/head.php')?>  
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
      <li id="filter-item-1" class="active" data-filter="all"><a href="#">Все</a></li>
      <li id="filter-item-2" data-filter="1"><a href="#">Квартиры</a></li>
      <li id="filter-item-3" data-filter="3"><a href="#">Дома, котеджи</a></li>
      <li id="filter-item-4" data-filter="4"><a href="#">Рестораны, кафе</a></li>
      <li id="filter-item-5" data-filter="2"><a href="#">Офисы, Магазины</a></li>             
      <li id="filter-item-6" data-filter="6"><a href="#">Отели</a></li>                
    </ul>
  </div>
  <script>
    document.getElementById('filter-item-1').onclick = function() {
                    var value = $(this).text();
                    $("small#filter-selected").text(value);
                  }
                  document.getElementById('filter-item-2').onclick = function() {
                    var value = $(this).text();
                    $("small#filter-selected").text(value);
                  }
                  document.getElementById('filter-item-3').onclick = function() {
                    var value = $(this).text();
                    $("small#filter-selected").text(value);
                  }
                  document.getElementById('filter-item-4').onclick = function() {
                    var value = $(this).text();
                    $("small#filter-selected").text(value);
                  }
                  document.getElementById('filter-item-5').onclick = function() {
                    var value = $(this).text();
                    $("small#filter-selected").text(value);
                  }
                  document.getElementById('filter-item-6').onclick = function() {
                    var value = $(this).text();
                    $("small#filter-selected").text(value);
                  }
  </script>
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
                <div class="filtr-item small vis" onclick="return location.href = 'layout/zalutino.php'" data-category="3" data-sort="Busy streets">
                    <img class="img-responsive" src="img/gallery/zalutino.jpg" alt="sample image">
                    <span class="item-desc">Залютино</span>
                </div>
                <div class="filtr-item small vis" onclick="return location.href = 'layout/inlet.php'" data-category="4" data-sort="Luminous night">
                    <img class="img-responsive" src="img/gallery/buhta.jpg" alt="sample image">
                    <span class="item-desc">Inlet(Бухта)</span>
                </div>
                <div class="filtr-item small vis" onclick="return location.href = 'layout/berlin.php'" data-category="1" data-sort="City wonders">
                    <img class="img-responsive" src="img/gallery/berlin.jpg" alt="sample image">
                    <span class="item-desc">Berlin House</span>
                </div>
                <div class="filtr-item small vis" onclick="return location.href = 'layout/chesnok.php'" data-category="4" data-sort="In production">
                    <img class="img-responsive" src="img/gallery/chesnok.jpg" alt="sample image">
                    <span class="item-desc">Ресторан "Чesnok"</span>
                </div>
                <div class="filtr-item small vis" onclick="return location.href = 'layout/robert.php'" data-category="2" data-sort="Industrial site">
                    <img class="img-responsive" src="img/gallery/robert.jpg" alt="sample image">
                    <span class="item-desc">RobertClay</span>
                </div>
                <div class="filtr-item small vis" onclick="return location.href = 'layout/aqua.php'" data-category="1" data-sort="Industrial site">
                    <img class="img-responsive" src="img/gallery/aqua.jpg" alt="sample image">
                    <span class="item-desc">Акварели</span>
                </div>
                <div class="filtr-item small vis" onclick="return location.href = 'layout/bakery.php'" data-category="4" data-sort="Peaceful lake">
                    <img class="img-responsive" src="img/gallery/bakery.jpg" alt="sample image">
                    <span class="item-desc">Bakery</span>
                </div>
                <div class="filtr-item small vis" onclick="return location.href = 'layout/shatilovka.php'" data-category="1" data-sort="City lights">
                    <img class="img-responsive" src="img/gallery/shatilovka.jpg" alt="sample image">
                    <span class="item-desc">Шатиловка</span>
                </div>
                <div class="filtr-item small vis" onclick="return location.href = 'layout/arch.php'" data-category="3" data-sort="City lights">
                    <img class="img-responsive" src="img/gallery/arch.jpg" alt="sample image">
                    <span class="item-desc">Архитектура</span>
                </div> 
                <div class="filtr-item small vis" onclick="return location.href = 'layout/tobol.php'" data-category="1" data-sort="Dreamhouse">
                    <img class="img-responsive" src="img/gallery/tobolsk.jpg" alt="sample image">
                    <span class="item-desc">Тобольская</span>
                </div>
                <div class="filtr-item small vis" onclick="return location.href = 'layout/apart.php'" data-category="6" data-sort="Dreamhouse">
                    <img class="img-responsive" src="img/gallery/apart.jpg" alt="sample image">
                    <span class="item-desc">Апартаменты</span>
                </div>
                <div class="filtr-item small vis" onclick="return location.href = 'layout/yarosh.php'" data-category="1" data-sort="Restless machines">
                    <img class="img-responsive" src="img/gallery/yarosh.jpg" alt="sample image">
                    <span class="item-desc">Отакара Яроша</span>
                </div>
                <div class="filtr-item small vis" onclick="return location.href = 'layout/office.php'" data-category="2" data-sort="Restless machines">
                    <img class="img-responsive" src="img/gallery/office.jpg" alt="sample image">
                    <span class="item-desc">Офис</span>
                </div>
                <div class="filtr-item small vis" onclick="return location.href = 'layout/sovrem.php'" data-category="2" data-sort="Restless machines">
                    <img class="img-responsive" src="img/gallery/sovremen.jpg" alt="sample image">
                    <span class="item-desc">Современный стиль</span>
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
<div class="wrap-mob">
<div class="screen">
<?php include('partials/header.php')?>
   <div class="main">
     <div class="block-gallery">
    <small id="selected">Все</small>
  <div class="tabbed">
    <ul>    
      <li id="filter-item-1" class="active" data-filter="all" data-toggle="portfilter" data-target="all"><a href="#">Все</a></li>
      <li id="filter-item-2" data-filter="1" data-toggle="portfilter" data-target="flat"><a href="#">Квартиры</a></li>
      <li id="filter-item-3" data-filter="3" data-toggle="portfilter" data-target="house"><a href="#">Дома, котеджи</a></li>
      <li id="filter-item-4" data-filter="4" data-toggle="portfilter" data-target="fastfood"><a href="#">Рестораны, кафе</a></li>
      <li id="filter-item-5" data-filter="2" data-toggle="portfilter" data-target="office"><a href="#">Офисы, Магазины</a></li>             
      <li id="filter-item-6" data-filter="6" data-toggle="portfilter" data-target="hotel"><a href="#">Отели</a></li>                
    </ul>
  </div>
  <script>
    document.getElementById('filter-item-1').onclick = function() {
                    var value = $(this).text();
                    $("small#selected").text(value);
                  }
                  document.getElementById('filter-item-2').onclick = function() {
                    var value = $(this).text();
                    $("small#filter-selected").text(value);
                  }
                  document.getElementById('filter-item-3').onclick = function() {
                    var value = $(this).text();
                    $("small#filter-selected").text(value);
                  }
                  document.getElementById('filter-item-4').onclick = function() {
                    var value = $(this).text();
                    $("small#filter-selected").text(value);
                  }
                  document.getElementById('filter-item-5').onclick = function() {
                    var value = $(this).text();
                    $("small#filter-selected").text(value);
                  }
                  document.getElementById('filter-item-6').onclick = function() {
                    var value = $(this).text();
                    $("small#filter-selected").text(value);
                  }
    </script>
      <div class="clearfix"></div>

            <br />

            <ul class="thumbnails gallery">
                <li class="span3 clearfix" data-tag='house'>
                    <div class="thumbnail">
                        <img alt="270x170" src="img/gallery/zalutino.jpg" />
                        <div class="caption">
                            <h4 class="item-desc">Залютино</h4>
                        </div>
                    </div>
                </li>
                <li class="span3" data-tag='fastfood'>
                    <div class="thumbnail" >
                        <img alt="270x170" src="img/gallery/buhta.jpg" />
                        <div class="caption">
                            <h4 class="item-desc">Inlet(Бухта)</h4>

                        </div>
                    </div>
                </li>
                <li class="span3" data-tag='flat'>
                    <div class="thumbnail">
                        <img alt="270x170" src="img/gallery/berlin.jpg" />
                        <div class="caption">
                            <h4 class="item-desc">Berlin House</h4>

                        </div>
                    </div>
                </li>
                <li class="span3" data-tag='fastfood'>
                    <div class="thumbnail">
                        <img alt="270x170" src="img/gallery/chesnok.jpg" />
                        <div class="caption">
                            <h4 class="item-desc">Ресторан "Чesnok"</h4>
                        </div>
                    </div>
                </li>
                <li class="span3" data-tag='office'>
                    <div class="thumbnail" >
                        <img alt="270x170" src="img/gallery/robert.jpg" />
                        <div class="caption">
                            <h4 class="item-desc">RobertClay</h4>
                        </div>
                    </div>
                </li>
                <li class="span3" data-tag='flat'>
                    <div class="thumbnail">
                        <img alt="270x170" src="img/gallery/aqua.jpg" />
                        <div class="caption">
                            <h4 class="item-desc">Акварели</h4>
                        </div>
                    </div>
                </li>
                <li class="span3 clearfix" data-tag='fastfood'>
                    <div class="thumbnail">
                        <img alt="270x170" src="img/gallery/bakery.jpg" />
                        <div class="caption">
                            <h4 class="item-desc">Bakery</h4>
                        </div>
                    </div>
                </li>
                <li class="span3" data-tag='flat'>
                    <div class="thumbnail">
                        <img alt="270x170" src="img/gallery/shatilovka.jpg" />
                        <div class="caption">
                            <h4 class="item-desc">Шатиловка</h4>
                        </div>
                    </div>
                </li>
                <li class="span3" data-tag='house'>
                    <div class="thumbnail">
                        <img alt="270x170" src="img/gallery/arch.jpg" />
                        <div class="caption">
                            <h4 class="item-desc">Архитектура</h4>
                        </div>
                    </div>
                </li>
                <li class="span3"  data-tag='flat'>
                    <div class="thumbnail">
                        <img alt="270x170" src="img/gallery/tobolsk.jpg" />
                        <div class="caption">
                            <h4 class="item-desc">Тобольская</h4>
                        </div>
                    </div>
                </li>
                <li class="span3"  data-tag='hotel'>
                    <div class="thumbnail">
                        <img alt="270x170" src="img/gallery/apart.jpg" />
                        <div class="caption">
                            <h4 class="item-desc">Апартаменты</h4>
                        </div>
                    </div>
                </li>
                <li class="span3" data-tag='flat'>
                    <div class="thumbnail" >
                        <img alt="270x170" src="img/gallery/yarosh.jpg" />
                        <div class="caption">
                            <h4 class="item-desc">Отакара Яроша</h4>
                        </div>
                    </div>
                </li>
                <li class="span3" data-tag='office'>
                    <div class="thumbnail" >
                        <img alt="270x170" src="img/gallery/office.jpg" />
                        <div class="caption">
                            <h4 class="item-desc">ООфис</h4>
                        </div>
                    </div>
                </li>
                <li class="span3" data-tag='office'>
                    <div class="thumbnail" >
                        <img alt="270x170" src="img/gallery/sovremen.jpg" />
                        <div class="caption">
                            <h4 class="item-desc">Современный стиль</h4>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="push"></div>

            <script>
                /* ============================================================
 * bootstrap-portfilter.js for Bootstrap v2.3.1
 * https://github.com/geedmo/portfilter
 * ============================================================
 * Copyright 2012 Twitter, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ============================================================
 * 
 * jQuery (Very) Lightweight Portfolio Filter for Bootstrap
 * 
 * Author: Geedmo (http://geedmo.com)
 * Version: 1.0
 * Usage:
 *   For handlers
 *     <tag data-toggle="portfilter" data-target="targetname">...
 *   For items
 *     <tag data-tag="targetname">...
 * ============================================================ */

!function ($) {

  "use strict"; // jshint ;_;
    
  var pluginName = 'portfilter';

 /* PUBLIC CLASS DEFINITION
  * ============================== */

  var PortFilter = function (element) {
    
    this.$element = $(element)
    this.stuff    = $('[data-tag]');
    this.target   = this.$element.data('target') || '';

  }

  PortFilter.prototype.filter = function (params) {
    var items = [],
        target = this.target;
    this.stuff
        .fadeOut('fast').promise().done(function(){
            $(this).each(function(){
                if($(this).data('tag') == target || target == 'all') 
                    items.push(this);
            });
            $(items).show()
        });  
  }


 /* PLUGIN DEFINITION
  * ======================== */

  var old = $.fn[pluginName]

  $.fn[pluginName] = function (option) {
    return this.each(function () {
      var $this = $(this)
        , data = $this.data(pluginName);
      
      if(!data) $this.data(pluginName, (data = new PortFilter(this)))
      
      if (option == 'filter') data.filter()
    })
  }
  
  // DEFAULTS
  $.fn[pluginName].defaults = {}
  
  // CONSTRUCTOR CONVENTION 
  $.fn[pluginName].Constructor = PortFilter;


 /* PORTFILTER NO CONFLICT
  * ================== */

  $.fn[pluginName].noConflict = function () {
    $.fn[pluginName] = old
    return this
  }

 /* PORTFILTER DATA-API
  * =============== */

  $(document).on('click.portfilter.data-api', '[data-toggle^=portfilter]', function (e) {
        $(this).portfilter('filter')
  })

}(window.jQuery);

            </script>
    </div>
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

<a href="#" class="scrollup">Наверх</a>
</div> <!-- end wrap-mob -->
</body>
</html>
