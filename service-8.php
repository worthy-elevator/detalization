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
<div class="service-button" id="service-button">
  <div class="arrow-service"onclick="arrow()"><img src="/img/arrow-services.png"> </div>
  <a href="services.php"><img src="/img/text-services.png"></a>
</div>
  <script type="text/javascript">  
    var i=1;
    function arrow()
    {
      
      if (i!=0) 
      {document.getElementById("service-button").style.width = "140px";
        i=0;
      }else
      {document.getElementById("service-button").style.width = "20px";
        i=1;
      }
    }
    </script>

<div class="container" style="width: 930px; margin: 0 auto;">
  <div class="container-left" style="float: left;width:640px;">
    <p class="service-label">Шлифовальная обработка</p>
    <div class="service-img">
      <img src="/img/8.jpg"></div>
    <p class="service-text">Токарная обработка – это механическая обработка специальными режущими 
инструментами поверхности тела вращения: цилиндрических, конических. Разновидность 
токарных работ: отрезание, снятие фасок, нарезание резьбы. Токарная обработка – одна из самых 
древних технических операций, которая была механизирована. Специалисты компании Компас-Деталь выполняют работы на новейшем токарном оборудовании, благодаря нашему опыту и технической базе вы получаете продукт наивысшего качества!<br></p>
    <p class="fnk-crm">Наша команда работает в городе Симферополе. Так же возможна доставка по Крыму.</p>
    <div class="services-img" style="<?include ('./services/8/fuckinoff.php');?>margin: 50 0">
    <?
$folder = "services/8/";
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
            background-image: url(/services/8/'.$key.');
          }
          </style>
<div class="pics" style="margin:10 15 10 5">
      <div class="image"><input id="'.$key.'1" type="checkbox"><label for="'.$key.'1" onclick="showImg('.$key.')" style="background-image: url(/services/8/'.$name.');"><img class="fullimg" src="/services/8/'.$name.'" alt="'.$alt.'" id="'.$key.'" style="height:120px;"></label></div>
    </div>
          ';
 }
}

    ?>
  </div>
  </div>
  <script type="text/javascript">
  function showImg(imag) {
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
footer();
?>

</body>

