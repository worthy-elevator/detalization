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
  <div class="arrow-service" onclick="arrow()"><img src="/img/arrow-services.png" alt="Кнопка возврата к услугам"> </div>
  <a href="services.php"><img src="/img/text-services.png" alt="Кнопка возврата к услугам"></a>
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

<div class="container">
  <div class="container-left">
    <p class="service-label">Лазерная резка</p>
    <div class="service-img">
      <img src="/img/9.jpg" alt="Лазерная резка"></div>
    <p class="service-text">Лазерная резка – это технология резки металла с помощью лазера высокой мощности. Лазер обеспечивает высокую концентрацию энергии и разрезает практически любой материал, но при этом отсутствует механическое воздействие на заготовку, что позволяет обрабатывать легкодеформируемые и нежесткие детали в сочетании с высоким качеством поверхности реза.<br></p>
    <p style = "border-top: 1px dashed #666; border-bottom: 1px dashed #666; box-shadow: 0 10px 6px -6px #d6d5d5; padding: 10px" class="fnk-crm">Наша команда работает в городе Симферополе. Так же возможна доставка по Крыму.</p>
    <div class="services-img" style="<?include ('./services/9/fuckinoff.php');?>margin: 50 0">
    <?
$folder = "services/9/";
  $dircontent = scandir($folder);
  $arr = array();
  foreach($dircontent as $filename) {
    if ($filename != '.' && $filename != '..' && $filename!='fuckinoff.php') {
      if (filemtime($folder.$filename) === false) return false;
      $dat = filemtime($folder.$filename);
      $services[$dat] = $filename;
    }
  }
  if (!is_array($services))
  {}else
{echo '<p class="works-text">Наши работы</p>';
          ksort($services);
foreach($services as $key=>$name)
{
  $alt= str_replace("~"," ",$name);


          echo '
          <style>
          input+label #'.$key.'
          {
            background-image: url(/services/9/'.$key.');
          }
          </style>
<div class="pics" style="margin:10 15 10 5">
      <div class="image"><input id="'.$key.'1" type="checkbox"><label for="'.$key.'1" onclick="showImg('.$key.')" style="background-image: url(/services/9/'.$name.');"><img class="fullimg" src="/services/9/'.$name.'" alt="'.$alt.'" id="'.$key.'" style="height:120px;"></label></div>
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

