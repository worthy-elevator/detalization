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
		<div>
готово
номер вашего заказа<?
echo $str;
?>
		</div>

	</div>

<?
menu_right();
footer();
?>
</body>