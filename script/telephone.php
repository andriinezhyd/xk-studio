<?
if($_POST['phone']){ // заносим в массив значение полей, их может быть больше
  $znach = array(
    1 => $_POST['phone'],
    2 => $_POST['phone'],
  );
  mail("info@hk-design.com.ua", "Только телефон и мы в деле  ".$_SERVER['HTTP_REFERER'], $znach[1]." ".$znach[1]); // письмо на свой электронный ящик, измените на свой email
}
Header("Refresh: 3; URL=".$_SERVER['HTTP_REFERER']); // спустя 8 секунд человек будет возвращён на предыдущий URL
?>

<!DOCTYPE html>
<title><? print "$znach[1], данные успешно отправлены!"; ?></title>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<meta name="robots" content="noindex"/>
<style>
body {background: url(../img/cam3.png);background-repeat: no-repeat; background-size: cover ;  }
body > div {
  position: absolute;
  top: 50%; left: 50%;
  -ms-transform: translate(-50%, -50%); -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);
  padding: .5% 1% 1%;
  
  font-size: 50px;
  font-weight: 600;
  font-family: Arial;
  text-align: center;
  color: #363636;
  width: 80%;
}
label{
  font-size: 100px;
}
label:hover {
  color: red;
  cursor: pointer;
}
body > div > div {padding-top: 3%;}
@media only screen and (max-width : 1024px){
  body {background: none ;  }
}
</style>

<div>
<!--<label title="Продолжить">✕</label>-->
<img src="../img/logo-black.png" alt="logo">
<p>Ваша заявка получена!<br>
Мы позвоним Вам в течении часа.</p>
</div>

<script> // нажав на label посетитель вернётся на предыдущую страницу, где заполнял форму
document.getElementsByTagName('label')[0].onclick = function() {
  window.location.href="<? print $_SERVER['HTTP_REFERER']; ?>"
}
</script>