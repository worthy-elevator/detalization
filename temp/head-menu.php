<?PHP
function menu(){
	echo'
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <link href="css/style-pc.css" type="text/css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Marmelad" rel="stylesheet"> 
  <script src="https://www.google.com/recaptcha/api.js?hl=ru" async defer></script>
  <meta name="description" content="" />
<meta name="keywords" content="" /> 
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="./js/jquery-1.7.2.min.js" ></script>
<script type="text/javascript" src="./js/script.js"></script>
</head>
<body>
<script type="text/javascript">
var elements = document.getElementsByClassName("recaptcha-checkbox-checkmark");
  if(elements.classList.contains("recaptcha-checkbox-checked"))
  {document.getElementById("button").style.display = "block";}
  else{document.getElementById("button").style.display = "none";}
</script>
<div id="content" style="text-align:center;position: fixed;right: 40;bottom: 40;">
    <a href="#" id="callback"><img src="./img/phone.png" style="width: 70;height: 70"></a>
</div>
<div id="popup">
    <form id="contact_form" role="form" method="post" action="./php/order.php">
        <h3 style = "font-size : 18px; text-align : center;">Укажите свои данные! </h3>
        <input type="text" name="name"  placeholder="Как к вам обращаться?">
        <input type="text" name="tel"  class="required" placeholder="Контакный телефон (обязательно)">
        <input type="text" name="email" placeholder="Email">
        <textarea name="message" placeholder="Текст сообщения" rows="5"></textarea>
        <div class="g-recaptcha" data-sitekey="6LdtvJMUAAAAAAZrYlKHXYIpbdjza7ESJvZPGW4N"></div>
        <a href="#" id="button" class="btn button form_submit" style="display:none;">Заказать</a>
    </form>
</div>
	<div class="header">
		<div class="top-menu">
			<div class ="buttons" >
				<div class= "menu-button">
          <div class="logo" style="float:left;" id="none-copy ">
            <img src="img/menu-pic.png" width="70px"> 
          </div>
          <div class="company-name" id="none-copy">
            <p>Компас-Деталь</p>
          </div>
				  <div class="button-setting" id="menu" >
				    <ul type="none" id="none-copy">
   				    <li><a href="index.php" id="index">Главная</a></li>
   				    <li><a href="services.php" id="services">Услуги</a></li>
   				    <li style="';
              include ('./dev/fuckinoff.php');
              echo '"><a href="customers.php" id="customers">Наши заказчики</a></li>
   				    <li><a href="contacts.php" id="contacts">Контакты</a></li>
  				  </ul>
				  </div>
          <div class="contacts">
            <a href="tel:+7(978)1111111">тел. +7(978)1111111</a><br>
            <a href="mailto:vashapochta@gmail.com">email: vashapochta@gmai.com</a>
          </div>			
		    </div>
      </div>
    </div>
  </div>
  </div>
';}
//.recaptcha-checkbox-checked
function menu2(){
	echo'
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <link href="css/style-mobile.css" type="text/css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Marmelad" rel="stylesheet"> 
</head>
<body>
	<div class="header">

		<div class="top-menu">
			<div class ="buttons" >
				<div class= "menu-button">

        <div class="logo" style="float:left;" id="none-copy ">
            <img src="img/menu-pic.png" height="70px"> 
          </div>
          <div class="company-name" id="none-copy">
            <p>Компас-Деталь</p>
          </div>
					<div class="menu-icon" style="" onclick="showImg()">
	          <div class="container">


        <input type="checkbox" id="checkbox4" class="checkbox4 visuallyHidden">
        <label for="checkbox4"  onclick="showMenu()">
            <div class="hamburger hamburger4">
                <span class="bar bar1"></span>
                <span class="bar bar2"></span>
                <span class="bar bar3"></span>
                <span class="bar bar4"></span>
                <span class="bar bar5"></span>
            </div>
        </label>

    </div>
					</div>

									
			</div>
<div class="button-setting" id="menu">

               <ul type="none" class="none-copy">
               <li ><a href="index.php">Главная</a></li>
               <li><a href="services.php">Услуги</a></li>
                <li style="';
              include ('./dev/fuckinoff.php');
              echo'"><a href="customers.php">Наши заказчики</a></li>
               <li><a href="contacts.php">Контакты</a></li>
              </ul>
          </div>
			
		</div>
	</div>
  </div>



<script type="text/javascript">
	function showMenu() {
    if ( document.getElementById("menu").style.display =="block") 
    {
    	document.getElementById("menu").style.display = "none";
    }else
    {
    	document.getElementById("menu").style.display = "block";
    }

}
</script>
</body>
';}
?>