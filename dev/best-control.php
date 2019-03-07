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
$file='fuckinoff_best.php';
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
	$name=iconv('Windows-1251', 'UTF-8', $name);
	$name= str_replace(" ","~",$name);
	$name=iconv('UTF-8','Windows-1251', $name);
	
	copy($_FILES['uploadfile']['tmp_name'],"../best-works/".basename($name));
}

if (empty($_POST['delete'])) {
}else{
	$name="../best-works/".$_POST['delete'];
	if(file_exists($name))
	unlink($name);
}

$folder = "../best-works/";
  $dircontent = scandir($folder);
  $arr = array();
  foreach($dircontent as $filename) {
    if ($filename != '.' && $filename != '..') {
      if (filemtime($folder.$filename) === false) return false;
      $dat = filemtime($folder.$filename);
      $customers[$dat] = $filename;
    }
  }




?>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<a href="../index.php">Вернуться на сайт</a>
	<a href="admin.php?do=logout">Выход из учетной записи</a>
	<a href="admin.php">Главная</a>
	<a href="services-control.php?page=1">Управление В услугах</a>
	<br>
	<?
	echo '<br>'.$_POST['submit'].'<br>';
?>
	<br>
	<p>Включение/выключение блока "Лучшие работы"</p>
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
	<p>Добавение лучших работ<br>(Важно! название должно описывать изображение т.е. то, что изображено на картинке. К примеру, если компания называется "ООО "Salercompany", то картинка должна называться "логотип компании по производству перерабатывающего оборудования Salercompany.jpg". Где .jpg формат файла)</p>
	<div class="add-customers">
		<form action=best-control.php method=post enctype=multipart/form-data>
			<input type=file name=uploadfile>
			<input type=submit value=Загрузить>
		</form>
	</div>

	<br>
	<p>управление списком лучших работ</p>
	<div class="customers-list">
		<table>
  			<? 

  if (!is_array($customers))
  {
  	echo "У вас нет изображений";
  }else{
  			ksort($customers);
  			foreach($customers as $key=>$name)
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