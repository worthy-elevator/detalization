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
</body>