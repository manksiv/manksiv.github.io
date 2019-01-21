<?php
	if(isset($_GET['name'])){
	$name=$_GET['name'];
	$email=$_GET['email'];
	$comment=$_GET['comment'];
	$name = htmlspecialchars($name);
	$email = htmlspecialchars($email);
	$comment = htmlspecialchars($comment);
	$name = urldecode($name);
	$email = urldecode($email);
	$comment = urldecode($comment);
	$name = trim($name);
	$email = trim($email);
	$comment = trim($comment);
	if(mail("maneeva.se@gmail.com", "Заявка с сайта", "Имя:".$name.". Текст: ".$comment ,"From: ".$email." \r\n")){
echo "Сообщение успешно отправлено"; 
 } else { 
 echo "При отправке сообщения возникли ошибки";
 }
}
}
?>
