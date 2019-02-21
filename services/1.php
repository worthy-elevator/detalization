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
          <!--<div>
            <img src="customers/'.$name.'" id="'.$key.'" style="height:100px; float:left; margin: 20 " onclick="showMenu('.$key.')">
          </div>-->
<div class="pics" style="margin:10 15 10 5">
      <div class="image"><input id="'.$key.'1" type="checkbox"><label for="'.$key.'1" onclick="showMenu('.$key.')" style="background-image: url(/customers/'.$name.');"><img class="fullimg" src="customers/'.$name.'" alt="'.$alt.'" id="'.$key.'" style="height:120px;"></label></div>
    </div>
          ';
 }


    ?>
  </div>
  </div>
  <script type="text/javascript">
  function showMenu(imag) {
    var id=imag;
    if ( document.getElementById(id).style.display =="none") 
    {
      document.getElementById(id).style.display = "block";
    }else
    {
      document.getElementById(id).style.display = "none";
    }

}
</script>



