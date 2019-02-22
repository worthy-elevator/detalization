<?php
	foreach (glob("temp/*.php") as $filename)
{
    include $filename;
}
if(isMobile()) {
   menu2();
}
else menu();
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
echo'<style>#customers
{
  border: 0px solid #ADC0CE;
  border-radius: 15px;
  background-image: url(/img/button-back.jpg);
}
</style>';

banner();
?>

<div class="container" style="width: 930px; margin: 0 auto;">
	<div class="container-left" style="float: left;width:640px;">
		<div class="customers-img" style="margin: 50 0">
		<?
$folder = "customers/";
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
foreach($customers as $key=>$name)
{
	$alt= str_replace("~"," ",$name);
	//$alt=iconv('UTF-8','Windows-1251', $alt);

  				echo '
  				<style>
  				input+label #'.$key.'
  				{
  					background-image: url(/customers/'.$key.');
  				}
  				</style>
  				<div>
  					<img src="customers/'.$name.'" id="'.$key.'"  alt="'.$alt.'" style="height:100px; float:left; margin: 20 " onclick="showMenu('.$key.')">
  				</div>
  				';
 }


		?>
	</div>
	</div>
<?
menu_right();
?>
</body>