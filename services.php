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

	<div class="container" >
		<div class="container-left">
			<div class="services-list" style="font-size: 35px; text-align: center; margin-top: 23px; ">
				Мы выполняем широкий спектр работ:
			</div>
			<div class="service" style="margin: 30 20 0 20">
				<div class="service-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					<a href="service-1.php" id="none-copy">Токарная обработка</a>
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					Токарная обработка – это механическая обработка специальными режущими 
инструментами поверхности тела вращения: цилиндрических, конических...
				</div>
				<a href="service-1.php" style="color: blue;" id="none-copy" style="margin-left: 20px;">Подробнее</a>
				<div class="service-image">
					<img src="">
				</div>
				
			</div>
			<div class="service" style="margin: 30 20 0 20">
				<div class="service-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					Токарная обработка
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					Токарная обработка – это механическая обработка специальными режущими 
инструментами поверхности тела вращения: цилиндрических, конических...
				</div>
				<a href="service-1.php" style="color: blue;" id="none-copy">Подробнее</a>
				<div class="service-image">
					<img src="">
				</div>
			</div>
			<div class="service" style="margin: 30 20 0 20">
				<div class="service-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					Токарная обработка
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					Токарная обработка – это механическая обработка специальными режущими 
инструментами поверхности тела вращения: цилиндрических, конических...
				</div>
				<a href="service-1.php" style="color: blue;" id="none-copy">Подробнее</a>
				<div class="service-image">
					<img src="">
				</div>
			</div>
			<div class="service" style="margin: 30 20 0 20">
				<div class="service-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					Токарная обработка
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					Токарная обработка – это механическая обработка специальными режущими 
инструментами поверхности тела вращения: цилиндрических, конических...
				</div>
				<a href="service-1.php" style="color: blue;" id="none-copy">Подробнее</a>
				<div class="service-image">
					<img src="">
				</div>
			</div>
			<div class="service" style="margin: 30 20 0 20">
				<div class="service-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					Токарная обработка
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					Токарная обработка – это механическая обработка специальными режущими 
инструментами поверхности тела вращения: цилиндрических, конических...
				</div>
				<a href="service-1.php" style="color: blue;" id="none-copy">Подробнее</a>
				<div class="service-image">
					<img src="">
				</div>
			</div>
			<div class="service" style="margin: 30 20 0 20">
				<div class="service-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					Токарная обработка
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					Токарная обработка – это механическая обработка специальными режущими 
инструментами поверхности тела вращения: цилиндрических, конических...
				</div>
				<a href="service-1.php" style="color: blue;" id="none-copy">Подробнее</a>
				<div class="service-image">
					<img src="">
				</div>
			</div>
			<div class="service" style="margin: 30 20 0 20">
				<div class="service-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					Токарная обработка
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					Токарная обработка – это механическая обработка специальными режущими 
инструментами поверхности тела вращения: цилиндрических, конических...
				</div>
				<a href="service-1.php" style="color: blue;" id="none-copy">Подробнее</a>
				<div class="service-image">
					<img src="">
				</div>
			</div>
			<div class="service" style="margin: 30 20 0 20">
				<div class="service-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					Токарная обработка
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					Токарная обработка – это механическая обработка специальными режущими 
инструментами поверхности тела вращения: цилиндрических, конических...
				</div>
				<a href="service-1.php" style="color: blue;" id="none-copy">Подробнее</a>
				<div class="service-image">
					<img src="">
				</div>
			</div>
			<div class="service" style="margin: 30 20 0 20">
				<div class="service-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					Токарная обработка
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					Токарная обработка – это механическая обработка специальными режущими 
инструментами поверхности тела вращения: цилиндрических, конических...
				</div>
				<a href="service-1.php" style="color: blue;" id="none-copy">Подробнее</a>
				<div class="service-image">
					<img src="">
				</div>
			</div>
			<div class="service" style="margin: 30 20 0 20">
				<div class="service-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					Токарная обработка
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					Токарная обработка – это механическая обработка специальными режущими 
инструментами поверхности тела вращения: цилиндрических, конических...
				</div>
				<a href="service-1.php" style="color: blue;" id="none-copy">Подробнее</a>
				<div class="service-image">
					<img src="">
				</div>
			</div>
			<div class="service" style="margin: 30 20 0 20">
				<div class="service-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					Токарная обработка
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					Токарная обработка – это механическая обработка специальными режущими 
инструментами поверхности тела вращения: цилиндрических, конических...
				</div>
				<a href="service-1.php" style="color: blue;" id="none-copy">Подробнее</a>
				<div class="service-image">
					<img src="">
				</div>
			</div>
			<div class="service" style="margin: 30 20 0 20">
				<div class="service-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					Токарная обработка
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					Токарная обработка – это механическая обработка специальными режущими 
инструментами поверхности тела вращения: цилиндрических, конических...
				</div>
				<a href="service-1.php" style="color: blue;" id="none-copy">Подробнее</a>
				<div class="service-image">
					<img src="">
				</div>
			</div>
						<div class="service" style="margin: 30 20 0 20">
				<div class="service-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					Токарная обработка
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					Токарная обработка – это механическая обработка специальными режущими 
инструментами поверхности тела вращения: цилиндрических, конических...
				</div>
				<a href="service-1.php" style="color: blue;" id="none-copy">Подробнее</a>
				<div class="service-image">
					<img src="">
				</div>
			</div>
		</div>
<?
menu_right();
footer();
?>

</body>