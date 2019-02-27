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
?>

<div class="container">
	<div class="container-left">
		<div >
			<form method="post" action="./php/order-c.php">
		        <h3 style = "font-size : 18px; text-align : center;">Укажите свои данные! </h3>
    	    <input type="text" name="name"  placeholder="Как к вам обращаться?">
        	<input type="text" name="tel"  class="required" placeholder="Контакный телефон (обязательно)">
        	<input type="text" name="email" placeholder="Email">
        	<textarea name="message" placeholder="Текст сообщения" rows="5"></textarea>
        	<div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LdtvJMUAAAAAAZrYlKHXYIpbdjza7ESJvZPGW4N"></div>
        	<input type="submit" id="submitBtn" name="send" style="display: none;" value="Отправить">			
			</form>
		</div>

	</div>
	<script type="text/javascript">
function recaptchaCallback() {
    $("#submitBtn").removeAttr("style");
};
</script>

<?
menu_right();
?>
</body>