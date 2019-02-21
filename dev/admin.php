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
	$name=$_FILES['uploadfile']['name'];
echo $name;

if ($errorMSG === ""){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "123_db";

	try {
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$stmt = $conn->prepare('INSERT INTO `customers` (name) VALUES (?)');
	
	$stmt->bind_param("s", $name);

	$stmt->execute();
		

	echo "Позиция теперь на своем месте!";
	$stmt->close();
	$conn->close();
	}
	catch(PDOException $e)
    {
		echo "Error: " . $e->getMessage();
    }
	$conn = null;
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
	<br>
	<div class="add-customers">
		<form action=admin.php method=post enctype=multipart/form-data>
			<input type=file name=uploadfile>
			<input type=submit value=Загрузить>
		</form>
	</div>
</body>