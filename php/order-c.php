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
			header("Location: ../contacts-done.php?N=".$Nzakaz."");			


        }
		else 
		{
			echo "<h2>Ошибка! Попробуйте еще раз.</h2>";
		}
	
?>