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
				<div class="services-label" style="font-size: 30px">
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
				<div class="services-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					<a href="service-2.php" id="none-copy">Фрезеровочная обработка
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					Фрезеровочная обработка – это процесс обработки поверхности путем срезания определенного
					 слоя с поверхности заготовки с помощью режущего инструмента...
				</div>
				<a href="service-2.php" style="color: blue;" id="none-copy">Подробнее</a>
				<div class="service-image">
					<img src="">
				</div>
			</div>
			<div class="service" style="margin: 30 20 0 20">
				<div class="services-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					<a href="service-3.php" id="none-copy">Шлифовальная обработка
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					Шлифовальная обработка – это механическая операция по обработке материала с помощью
					 абразивных насадок (шлифовальный круг, отрезной круг, шкурка, паста)...
				</div>
				<a href="service-3.php" style="color: blue;" id="none-copy">Подробнее</a>
				<div class="service-image">
					<img src="">
				</div>
			</div>
			<div class="service" style="margin: 30 20 0 20">
				<div class="services-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					<a href="service-4.php" id="none-copy"> Долбежная обработка
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					 Долбежная обработка – это механическая обработка заготовки, 
					где режущий инструмент совершает возвратно-поступательные движения...
				</div>
				<a href="service-4.php" style="color: blue;" id="none-copy">Подробнее</a>
				<div class="service-image">
					<img src="">
				</div>
			</div>
			<div class="service" style="margin: 30 20 0 20">
				<div class="services-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					 <a href="service-6.php" id="none-copy">Сварочные работы
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					 Сварочные работы – это процесс получения соединения посредствам установления межатомных 
					 связей между свариваемыми металлическими деталями...
				</div>
				<a href="service-6.php" style="color: blue;" id="none-copy">Подробнее</a>
				<div class="service-image">
					<img src="">
				</div>
			</div>
			<div class="service" style="margin: 30 20 0 20">
				<div class="services-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					<a href="service-7.php" id="none-copy">Порошковая окраска
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					Порошковая окраска – это метод получения покрытий с высокими декоративными и защитными свойствами. 
					Порошковая окраска является хорошей альтернативой лакокрасочным материалам...
				</div>
				<a href="service-7.php" style="color: blue;" id="none-copy">Подробнее</a>
				<div class="service-image">
					<img src="">
				</div>
			</div>
			<div class="service" style="margin: 30 20 0 20">
				<div class="services-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					<a href="service-8.php" id="none-copy">Плазменная резка
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					Плазменная резка – это вид обработки металла, при котором режущим инструментом является струя плазмы.
					 Рабочая температура плазмы составляет от 5000 до 30000 градусов... 
				</div>
				<a href="service-8.php" style="color: blue;" id="none-copy">Подробнее</a>
				<div class="service-image">
					<img src="">
				</div>
			</div>
			<div class="service" style="margin: 30 20 0 20">
				<div class="services-label" style="font-size: 30px">
					<img src="img/checkbox.png" style="height: 25px; margin-right: 15px;">
					<a href="service-9.php" id="none-copy">Лазерная резка
				</div>
				<div class="description" style="text-indent: 30px; text-align: justify;">
					Лазерная резка – это технология резки металла с помощью лазера высокой мощности. Лазер обеспечивает высокую концентрацию энергии и разрезает практически любой материал ...  
				</div>
				<a href="services-9.php" style="color: blue;" id="none-copy">Подробнее</a>
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