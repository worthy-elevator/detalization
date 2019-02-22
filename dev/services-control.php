<?php
session_start();
if($_GET['do'] == 'logout'){
 unset($_SESSION['admin']);
 session_destroy();

}
if(!$_SESSION['admin']){
 header("Location: log.php");
 exit;
}

$str = $_GET['page'];
$str = trim($str);
$str = stripslashes($str);
$str = htmlspecialchars($str);
$service=$str;

$file='../services/'.$service.'/fuckinoff.php';
if($_POST['submit']=='on')
{
	$data="<?php ?>";
	file_put_contents($file, $data);
}elseif ($_POST['submit']=='off') 
{
	$data="<?php echo 'display:none;';?>";
	file_put_contents($file, $data);
}

if (empty($_FILES['uploadfile'])) {
    $errorMSG = "не выбрали кортинку";
} else {
	$name=$_FILES['uploadfile']['name'];
	$name= str_replace(" ","~",$name);
	$name=iconv('UTF-8','Windows-1251', $name);
	
	copy($_FILES['uploadfile']['tmp_name'],'../services/'.$service.'/'.basename($name));
}

if (empty($_POST['delete'])) {
}else{
	$name='../services/'.$service.'/'.$_POST['delete'];
	if(file_exists($name))
	unlink($name);
}

$folder = '../services/';
$folder.=$service;
$folder.='/';
  $dircontent = scandir($folder);
  $arr = array();
  foreach($dircontent as $filename) {
    if ($filename != '.' && $filename != '..' && $filename!='fuckinoff.php') {
      if (filemtime($folder.$filename) === false) return false;
      $dat = filemtime($folder.$filename);
      $filename=iconv('Windows-1251', 'UTF-8', $filename);
      $services[$dat] = $filename;
    }
  }

?>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<a href="../index.php">Вернуться на сайт</a>|
	<a href="admin.php">Главная</a>|
	<a href="admin.php?do=logout">Выход из учетной записи</a>
	<br>
	<br>
	<a href="services-control.php?page=1">услуга 1</a>|
	<a href="services-control.php?page=2">услуга 2</a>|
	<a href="services-control.php?page=3">услуга 3</a>|
	<a href="services-control.php?page=4">услуга 4</a>|
	<a href="services-control.php?page=5">услуга 5</a>|
	<a href="services-control.php?page=6">услуга 6</a>|
	<a href="services-control.php?page=7">услуга 7</a>|
	<a href="services-control.php?page=8">услуга 8</a>|
	<a href="services-control.php?page=9">услуга 9</a>|
	<a href="services-control.php?page=10">услуга 10</a>|
	<a href="services-control.php?page=11">услуга 11</a>|
	<a href="services-control.php?page=12">услуга 12</a>|
	<a href="services-control.php?page=13">услуга 13</a>
	<br>

	<?

	echo '<br> Услуга №'.$service.'<br>';
	echo '<br>'.$_POST['submit'].'<br>';
?>
	<br>
	<p>Включение/выключение блока "Наши работы"</p>
	<div class="on-customers">
		<form method="post">
			<input type="submit" name="submit" value="on"/>
		</form>
	</div>
	<div class="off-customers">
		<form method="post">
			<input type="submit" name="submit" value="off"/>
		</form>
	</div>
	<br>
	<p>Добавение логотипов заказчиков<br>(Важно! название должно описывать изображение т.е. то, что изображено на картинке. К примеру, если компания называется "ООО "Salercompany", то картинка должна называться "логотип компании по производству перерабатывающего оборудования Salercompany.jpg". Где .jpg формат файла)</p>
	<div class="add-customers">
		<form action=# method=post enctype=multipart/form-data>
			<input type=file name=uploadfile>
			<input type=submit value=Загрузить>
		</form>
	</div>

	<br>
	<p>управление списком изображений</p>
	<div class="customers-list">
		<table>
  			<? 

  if (!is_array($services))
  {
  	echo "У вас нет изображений";
  }else{
  	  		ksort($services);
  			foreach($services as $key=>$name)
  			{
  				
  				echo '<tr>
    			<td>'.$name.'</td>
    			<td>
    				<form method="post">
    					<input type="hidden" name="delete" value="'.$name.'">
    					<button>удалить</button>
    				</form>
    			</td>
  			</tr>';
  			}
  		}
  			?>
		</table>
	</div>
</body>