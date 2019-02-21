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
echo'<style>#services
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
			<div class="index-words" style="margin-top: 20px;">
				<div class="servise" style=" margin:20 0;border: 1px solid #ADC0CE; border-radius: 15px;">
					<div class="servise-name" style="padding: 10 0 0 10; width:100%; height:35px;">
						<img src="img/checkbox.png" style=" margin:5px; width:35px; float: left;">
						<p style="padding:10px; font-size:20px; float:left;">asdfghjklktk</p>
					</div>
					<p style="padding:19px; font-size:15px;">asd sdgjostrh iusetrhiuwb u8ighjg fhjgfgh jklktkasd sdgjostrh iusetrhiuwb u8ighjg fhjgfgh jklktkasd sdgjostrh iusetrhiuwb u8ighjg fhjgfgh jklktkasd sdgjostrh iusetrhiuwb u8ighjg fhjgfgh jklktk<a href="#"> Подробнее.</a></p>
				</div>
				<div class="servise" style=" margin:20 0;border: 1px solid #ADC0CE; border-radius: 15px;">
					<div class="servise-name" style="padding: 10 0 0 10; width:100%; height:35px;">
						<img src="img/checkbox.png" style=" margin:5px; width:35px; float: left;">
						<p style="padding:10px; font-size:20px; float:left;">asdfghjklktk</p>
					</div>
					<p style="padding:19px; font-size:15px;">asd sdgjostrh iusetrhiuwb u8ighjg fhjgfgh jklktkasd sdgjostrh iusetrhiuwb u8ighjg fhjgfgh jklktkasd sdgjostrh iusetrhiuwb u8ighjg fhjgfgh jklktkasd sdgjostrh iusetrhiuwb u8ighjg fhjgfgh jklktk<a href="#"> Подробнее.</a></p>
				</div>
			</div>
		</div>

<?
menu_right();
?>
</body>