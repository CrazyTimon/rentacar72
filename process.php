<?php
$toemail = 'viktor_kad@mail.ru';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
if(mail($toemail, 'Subject', $message, 'From: ' . $email)) {
	echo 'Ваше сообщение успешно отправлено.';
} else {
	echo 'Проблемы с отправкой.';
}
?>