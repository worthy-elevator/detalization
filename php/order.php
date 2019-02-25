<script src='https://www.google.com/recaptcha/api.js'></script>
<?php
if(isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']) 
{
	$secret = '6LdtvJMUAAAAAPIwpqx6LC7oAPt9ZRlHDfrExhW_';
	$ip = $_SERVER['REMOTE_ADDR'];
	$response = $_POST['g-recaptcha-response'];
	$rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$ip");
	$arr = json_decode($rsp, TRUE);
	if($arr['success'])
	{
		header('Content-type: text/html; charset=utf-8');
		error_reporting(0);   
		if(!empty($_POST['send'])) 
		{
			$name = substr(htmlspecialchars(trim($_POST['name'])), 0, 300);
			$tel = substr(htmlspecialchars(trim($_POST['tel'])), 0, 100);
    		$email = substr(htmlspecialchars(trim($_POST['email'])), 0, 100);
    		$message = substr(htmlspecialchars(trim($_POST['message'])), 0, 3000);
			$ip = $_SERVER['REMOTE_ADDR'];

			$mess  = "Имя: ".$name.". ";
			$mess .= "Телефон: ".$tel.". ";
	   		$mess .= "Email: ".$email.". ";
		    $mess .= "Сообщение: ".$message.". ";

			mail("testpost-detalization@yandex.ru", $theme, $mess);
	
			echo '<h3 style = "font-size : 18px; text-align : center; " >Спасибо, что обратились к нам!</h3>';
			echo "<p> Наш менеджер свяжется с вами в ближайшее время!</p>";
        }
		else 
		{
			echo "<h2>Ошибка! Попробуйте еще раз.</h2>";
		}
	}
	else
	{
		echo "Вы, кажется робот.";
	}
}
	
?>