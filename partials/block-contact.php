<div class="block-contact-and-map row" id="contact">
	<div class="contact col-6">
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
<div  id="map" class="col-10" scrollwheel="false" style="height:850px;"></div>
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
