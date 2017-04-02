<?php
$toemail = '<a href="mailto:viktor_kad@mail.ru">viktor_kad@mail.ru<br>
<a href="mailto:info@renta-car72.ru">info@renta-car72.ru<br>';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
if(mail($toemail, 'Subject', $message, 'From: ' . $email)) {
	echo 'Ваше сообщение успешно отправлено.';
} else {
	echo 'Проблемы с отправкой.';
}
?>