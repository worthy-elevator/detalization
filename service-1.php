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
echo'<style>#services
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
    <p class="servise-label" style="font-size: 30px; text-align: center; padding: 30 0 20 0">Шлифовальная обработка</p>
    <div style="padding: 0 20">
      <img src="/img/1.png" style="width: 600px; box-shadow: 0 0 10px "></div>
    <p class="service-text" style="font-size: 17px; padding: 20 20; text-indent: 30px; text-align: justify;">Токарная обработка – это механическая обработка специальными режущими 
инструментами поверхности тела вращения: цилиндрических, конических. Разновидность 
токарных работ: отрезание, снятие фасок, нарезание резьбы. Токарная обработка – одна из самых 
древних технических операций, которая была механизирована. Специалисты компании Компас-Деталь выполняют работы на новейшем токарном оборудовании, благодаря нашему опыту и технической базе вы получаете продукт наивысшего качества!<br></p>
    <p style="font-size: 20px; padding: 0 20; text-align: justify; font-family: 'Marmelad', sans-serif;">Наша команда работает в городе Симферополе. Так же возможна доставка по Крыму.</p>
    <div class="customers-img" style="<?include ("./services/1/fuckinoff.php");?>margin: 50 0">
      <p class="works-text" style="font-size: 30px; text-align: center; padding: 0 0 20 0">Наши работы</p>
    <?
$folder = "services/1/";
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
  if (!is_array($services))
  {}else
{
          ksort($services);
foreach($services as $key=>$name)
{
  $alt= str_replace("~"," ",$name);


          echo '
          <style>
          input+label #'.$key.'
          {
            background-image: url(/services/1/'.$key.');
          }
          </style>
<div class="pics" style="margin:10 15 10 5">
      <div class="image"><input id="'.$key.'1" type="checkbox"><label for="'.$key.'1" onclick="showMenu('.$key.')" style="background-image: url(/services/1/'.$name.');"><img class="fullimg" src="/services/1/'.$name.'" alt="'.$alt.'" id="'.$key.'" style="height:120px;"></label></div>
    </div>
          ';
 }
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

<?
menu_right();
?>

</body>

