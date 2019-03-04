<?php
	foreach (glob("temp/*.php") as $filename)
{
    include $filename;
}
if(isMobile()) {
   menu2();
}
else menu();
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
echo'<style>#contacts
{
  border: 0px solid #ADC0CE;
  border-radius: 15px;
  background-image: url(/img/button-back.jpg);
}
</style>';

banner();
$str = $_GET['N'];
$str = trim($str);
$str = stripslashes($str);
$str = htmlspecialchars($str);
?>

<div class="container">
  <div class="container-left">
    <div class="contact-form" style="height: auto; padding: 45 15px;">
      <form method="post" action="./php/order-c.php">
            <h3>Готово
номер вашего заказа <?
echo $str;
?> </h3>
<h3>
  Если вам не перезвонили в течении 30 минут в рабочее время , пожалуйста, позвоните по номеру +79780646977 с указаного Вами телефона, сообщите номер заявки и получите скидку 10% на весь заказ. 
</h3>    
      </form>
		</div>

	</div>

<?
menu_right();
footer();
?>
</body>