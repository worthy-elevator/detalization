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

<div class="container">
	<div class="container-left">
		<div class="customers-img">
		<?
$folder = "customers/";
  $dircontent = scandir($folder);
  $arr = array();
  foreach($dircontent as $filename) {
    if ($filename != '.' && $filename != '..') {
      if (filemtime($folder.$filename) === false) return false;
      $dat = filemtime($folder.$filename);
      $customers[$dat] = $filename;
    }
  }
    if (!is_array($customers))
  {}else
{
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
  				<div id="none-copy-np">
  					<img src="customers/'.$name.'" id="'.$key.'"  alt="'.$alt.'" onclick="showImg('.$key.')">
  				</div>
  				';
 }
}

		?>
	</div>
	</div>
<?
menu_right();
footer();
?>
</body>