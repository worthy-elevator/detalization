<?php
session_start();
if($_GET['do'] == 'logout'){
 unset($_SESSION['admin']);
 session_destroy();

}
print_r($_FILES);
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
$folder = "../customers/";
  $dircontent = scandir($folder);
  print_r($dircontent);
  $arr = array();
  foreach($dircontent as $filename) {
    if ($filename != '.' && $filename != '..') {
      if (filemtime($folder.$filename) === false) return false;
      $dat = filemtime($folder.$filename);
      $customers[$dat] = $filename;
    }
  }
  ksort($customers);
  print_r($customers);

?>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<a href="admin.php?do=logout">exit</a>
	<br>
	<?
	echo '<br>'.$_POST['submit'].'<br>';
?>
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
	<div class="add-customers">
		<form action=admin.php method=post enctype=multipart/form-data>
			<input type=file name=uploadfile>
			<input type=submit value=Загрузить>
		</form>
	</div>
	<div class="customers-list">
		<table>
  			<? foreach($customers)
  			{
  				$name=$customers['i'];
  				echo '<tr>
    			<td>'..'</td>
    			<td>button</td>
  			</tr>';
  			}
  			?>

  			<tr>
    			<td>name</td>
    			<td>button</td>
  			</tr>
		</table>
	</div>
</body>