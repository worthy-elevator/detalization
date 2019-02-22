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
echo'<style>#index
{
  border: 0px solid #ADC0CE;
  border-radius: 15px;
  background-image: url(/img/button-back.jpg);
}
</style>';
banner();

?>

<div class="container" style="width: 930px; margin: 0 auto;">
	<div class="container-left" style="float: left;width:640px;">
		<div id="content" style="height:; width:630px; margin:0 auto; border:1px solid black; padding:200px 100px; text-align:center;">
    <a href="#" id="callback">Заказать обратный звонок</a>
</div>
<div id="popup">
    <form id="contact_form" role="form" method="post" action="./php/order.php">
        <h3 style = "font-size : 18px; text-align : center;">Укажите свои данные! </h3>
        <input type="text" name="name"  placeholder="Как к вам обращаться?">
        <input type="text" name="tel"  class="required" placeholder="Контакный телефон (обязательно)">
        <input type="text" name="email" placeholder="Email">
        <textarea name="message" placeholder="Текст сообщения" rows="5"></textarea>
        <a href="#" class="btn button form_submit">Заказать</a>
    </form>
</div>
	</div>

<?
menu_right();
?>
</body>