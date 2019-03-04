<?php
echo '<div id="content" style="text-align:center;position: fixed;right: 20;bottom: 20;">
    <a href="#" id="callback"><img src="./img/phone.png" alt="Закрытие формы заказа" style="width: 100;height: 100"></a>
</div>
<div id="popup">
    <form id="contact_form" role="form" method="post" action="./php/order.php">
        <h3 style = "font-size : 18px; text-align : center;">Укажите свои данные! </h3>
        <input type="text" name="name"  placeholder="Как к вам обращаться?">
        <input type="text" name="tel"  class="required" placeholder="Контакный телефон (обязательно)">
        <input type="text" name="email" placeholder="Email">
        <textarea name="message" placeholder="Текст сообщения" rows="5"></textarea>
        <a href="#" class="btn button form_submit">Заказать</a>
    </form>
</div>';
?>