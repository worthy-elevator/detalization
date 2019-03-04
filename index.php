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
echo'<style>#index
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
    <div class="index">
    <div class="index-label">О нас</div>
    <div class="index-desc" > Главным направлением компании Компас-Деталь является изготовление высококачественного перерабатывающего оборудования. Так же, компания занимаемся механической обработкой металлов.<br>
В нашем распоряжении парк профессиональных станков и оборудования, благодаря которым мы добились наивысшего качества токарных, фрезерных, шлифовальных, долбежных и сварочных работ.<br>
Так же нашими сотрудниками проводятся работы по порошковой покраске, плазменной и лазерной резке. 
Заказы выполняются четко в оговоренный срок по техническим документациям либо образцам клиента. </div>
    <div class="index-services">
      <div class="index-label">
        <p >Мы выполняем следующие виды работ:</p>
      </div>
      <a href="service-1.php" id="none-copy">
        <img src="/img/1.jpg" alt="Токарная обработка">
        <p>Токарная обработка</p>
      </a>
      <a href="service-2.php" id="none-copy">
        <img src="/img/2.jpg"alt="Фрезеровочная обработка">
        <p>Фрезеровочная обработка</p>
      </a>
      <a href="service-3.php" id="none-copy">
        <img src="/img/3.jpg" alt="Шлифовальная обработка">
        <p>Шлифовальная обработка</p>
      </a>
      <a href="service-4.php" id="none-copy">
        <img src="/img/4.jpg" alt="Долбежная обработка">
        <p>Долбежная обработка</p>
      </a>
      <a href="service-6.php" id="none-copy">
        <img src="/img/6.jpg" alt="Сварочные работы">
        <p>Сварочные работы</p>
      </a>
      <a href="service-7.php" id="none-copy">
        <img src="/img/7.jpg" alt="Порошковая окраска">
        <p>Порошковая окраска</p>
      </a>
      <a href="service-8.php" id="none-copy">
        <img src="/img/8.jpg" alt="Плазменная резка">
        <p>Плазменная резка</p>
      </a>
      <a href="service-9.php" id="none-copy">
        <img src="/img/9.jpg" alt="Лазерная резка ">
        <p>Лазерная резка</p>
      </a>
       
      </a>

    </div>

    <div class="best-works">
<?/*
$folder = "best-works/";
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
      <div class="image"><input id="'.$key.'1" type="checkbox"><label for="'.$key.'1" onclick="showImg('.$key.')" style="background-image: url(/services/1/'.$name.');"><img class="fullimg"  src="/services/1/'.$name.'" alt="'.$alt.'" id="'.$key.'" style="height:120px;"></label></div>
    </div>
          ';
 }
}

*/
    ?>
    </div>

    </div>		
	</div>

<?
menu_right();
footer();
?>
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
</body>