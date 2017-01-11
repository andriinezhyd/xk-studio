<div class="top">
	<h1 id="top"></h1>
	<p><small id="filter-selected"></small></p>
	<a href="index.php" class="size-logo-big pos-logo-r"></a>
</div>

<script>
  var titl=$("title").text();
  var namePage=$("h1#top").text();
   $(document).ready(function TitleOfPage (){
    if(titl != namePage){
      $("h1#top").text(titl);
    }
  });
</script>