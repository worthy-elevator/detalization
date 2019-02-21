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
$file='fuckinoff.php';
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
	copy($_FILES['uploadfile']['tmp_name'],"../customers/".basename($_FILES['uploadfile']['name']));
}

if (empty($_POST['delete'])) {
}else{
	$name="../customers/".$_POST['delete'];
	if(file_exists($name))
	unlink($name);
}

$folder = "../customers/";
  $dircontent = scandir($folder);
  $arr = array();
  foreach($dircontent as $filename) {
    if ($filename != '.' && $filename != '..') {
      if (filemtime($folder.$filename) === false) return false;
      $dat = filemtime($folder.$filename);
      $filename=iconv('Windows-1251', 'UTF-8', $filename);
      $customers[$dat] = $filename;
    }
  }
  ksort($customers);



?>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<a href="admin.php?do=logout">Выход из учетной записи</a>
	<br>
	<?
	echo '<br>'.$_POST['submit'].'<br>';
?>
	<br>
	<p>Включение/выключение страницы "Наши заказчики"</p>
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
		<form action=admin.php method=post enctype=multipart/form-data>
			<input type=file name=uploadfile>
			<input type=submit value=Загрузить>
		</form>
	</div>

	<br>
	<p>управление списком логотипов заказчиков</p>
	<div class="customers-list">
		<table>
  			<? foreach($customers as $key=>$name)
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
  			?>
		</table>
	</div>
</body>