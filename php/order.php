<?php
	header('Content-type: text/html; charset=utf-8');
	error_reporting(0);   

if(!empty($_POST['send'])) {

	$name = substr(htmlspecialchars(trim($_POST['name'])), 0, 300);
	$tel = substr(htmlspecialchars(trim($_POST['tel'])), 0, 100);
    $email = substr(htmlspecialchars(trim($_POST['email'])), 0, 100);
    $message = substr(htmlspecialchars(trim($_POST['message'])), 0, 3000);
	
	$ip = $_SERVER['REMOTE_ADDR'];

	$Nzakaz = rand(10000, 99999);

	$mess  = "Имя: ".$name.". ";
	$mess .= "Телефон: ".$tel.". ";
    $mess .= "Email: ".$email.". ";
    $mess .= "Сообщение: ".$message.". ";
	
	$theme = "Заявка Z".$Nzakaz;

	mail("boplkj@yandex.ru", $theme, $mess);
	
	echo "<h3>Заявка удачно оформлена.</h3>";
	echo "<p>Заявке присвоен номер Z".$Nzakaz.". Наш менеджер свяжется с вами в ближайшее время.</p>";
        
    }
else {
	
	echo "<h2>Ошибка! Попробуйте еще раз.</h2>";
	
}
	
?>