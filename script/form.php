<?php 

if(isset($_POST['submit'])){
/* Устанавливаем e-mail Кому и от Кого будут приходить письма */   
$to = "info@autoexpert178.ru"; // Здесь нужно написать e-mail, куда будут приходить письма   
$from = "no-reply@autoexpert178.ru"; // Здесь нужно написать e-mail, от кого будут приходить письма, например no-reply(собака)epicblog.net
 
/* Указываем переменные, в которые будет записываться информация с формы */
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$car = $_POST['car'];
$message = $_POST['message'];
$subject = "Форма заявки с сайта autoexpert178.ru";
     
/* Переменная, которая будет отправлена на почту со значениями, вводимых в поля */
$mail_to_myemail = "Здравствуйте! 
Было отправлено сообщение с сайта! 
Имя отправителя: $name
E-mail: $email
Номер телефона: $phone
Т/с: $car
Текст сообщения: $message
Чтобы ответить на письмо, создайте новое сообщение, скопируйте электронный адрес и вставьте в поле Кому.";  
     
$headers = "From: $from \r\n";
     
/* Отправка сообщения, с помощью функции mail() */
mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
echo "Сообщение отправлено. Спасибо Вам " . $name . ", мы скоро свяжемся с Вами.";
echo "<br /><br /><a href='http://autoexpert178.ru'>Вернуться на сайт.</a>";
}
?>