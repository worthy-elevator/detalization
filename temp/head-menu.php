<?PHP
function menu(){
	echo'
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <link href="css/style-pc.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div class="header">
	
		<div class="logo">
			<img src="1.jpg" width="100%"> 
			
		</div>
		<div class="top-menu">
			<div class ="buttons" >
				<div class= "menu-button">
					<div class="button-setting" id="menu">

  						 <ul type="none" id="none-copy">
   						 <li ><a href="1.html"> <div class="home-img" style="display: inline;">
        						<img class="home-pic" src="1.jpg"  >
  							  </div>Главная</a>
   						 </li>
   						 <li><a href="1.html">Услуги</a></li>
   						 <li><a href="1.html">Наши заказчики</a></li>
   						 <li style="border-right: 1px solid #ADC0CE"><a href="1.html">Контакты</a></li>
  						</ul>
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
</head>
<body>
	<div class="header">
	
		<div class="logo">
			<img src="1.jpg" width="100%"> 
			
		</div>
		<div class="top-menu">
			<div class ="buttons" >
				<div class= "menu-button">
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
					<div class="button-setting" id="menu">

  						 <ul type="none" class="none-copy">
   						 <li ><a href="1.html"> <div class="home-img">
        						<img class="home-pic" src="1.jpg"  >
  							  </div>Home</a>
   						 </li>
   						 <li><a href="1.html">Work</a></li>
   						 <li><a href="1.html">About</a></li>
   						 <li><a href="1.html">Blog</a></li>
   						 <li style="border-right: 1px solid #ADC0CE"><a href="1.html">Contact</a></li>
  						</ul>
					</div>				
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