<script src='https://www.google.com/recaptcha/api.js'></script>
<?php


		error_reporting(0);   
		if(!empty($_POST['send'])) 
		{
			$name = substr(htmlspecialchars(trim($_POST['name'])), 0, 300);
			$tel = substr(htmlspecialchars(trim($_POST['tel'])), 0, 100);
    		$email = substr(htmlspecialchars(trim($_POST['email'])), 0, 100);
    		$message = substr(htmlspecialchars(trim($_POST['message'])), 0, 3000);
			$ip = $_SERVER['REMOTE_ADDR'];

			$Nzakaz = rand(1000, 9999);

			$mess  = "Имя: ".$name.". ";
			$mess .= "Телефон: ".$tel.". ";
	   		$mess .= "Email: ".$email.". ";
		    $mess .= "Сообщение: ".$message.". ";

		    $theme = "Заявка №".$Nzakaz;

			mail("testpost-detalization@yandex.ru", $theme, $mess);
	
			echo '<h3 style = "font-size : 18px; text-align : center;padding: 90 0 0 0; " >Спасибо, что обратились к нам!</h3>';
			echo '<p>Заявке присвоен номер №'.$Nzakaz.'. Наш менеджер свяжется с вами в ближайшее время!</p> <p>Если вам не перезвонили в течении 15 минут, пожалуйста, позвоните по номеру +7ХХХХХХХХ с указаного Вами телефона, сообщите номер заявки и получите скидку <strong style="color:red;">10%</strong> на весь заказ.';
        }
		else 
		{
			echo "<h2>Ошибка! Попробуйте еще раз.</h2>";
		}
	
?>