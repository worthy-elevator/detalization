<?PHP
function menu(){
	echo'
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <link href="css/style-pc.css" type="text/css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Marmelad" rel="stylesheet"> 
</head>
<body>
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
					<div class="menu-icon" style="" onclick="showMenu()">
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