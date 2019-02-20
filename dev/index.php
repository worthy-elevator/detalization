<?php
if($_SESSION['admin']){
 header("Location: admin.php");
 exit;
}else
{
	header("Location: log.php");
}
?>