<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Создание формы обратной связи</title>
<meta http-equiv="Refresh" content="2; URL=http://kk.azudesign.agency/"> 
</head>
<body>

<?php 

$sendto   = "info@azudesign.agency"; // почта, на которую будет приходить письмо
$username = $_POST['name1'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['telephone1']; // сохраняем в переменную данные полученные из поля c телефонным номером
$userсompany = $_POST['compania1']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
$tPlan1 =$_POST ['tPlan1'];
$tPlan2 =$_POST ['tPlan2'];
$tPlan3 =$_POST ['tPlan3'];
$tPlan4 =$_POST ['tPlan4'];
$tPlan5 =$_POST ['tPlan5'];
$tPlan6 =$_POST ['tPlan6'];

// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";
$msg .= "<p><strong>Компания:</strong> ".$userсompany."</p>\r\n";
$msg .= "<p><strong>Кто предоставляет телефонию?:</strong> ".$tPlan1."</p>\r\n";    
$msg .= "<p><strong>Какой у Вас объем трафика?:</strong> ".$tPlan2."</p>\r\n";    
$msg .= "<p><strong>Основное направление звонков?:</strong> ".$tPlan3."</p>\r\n";    
$msg .= "<p><strong>Какая у Вас АТС?:</strong> ".$tPlan4."</p>\r\n";    
$msg .= "<p><strong>Как АТС подключена?:</strong> ".$tPlan5."</p>\r\n";    
$msg .= "<p><strong>Кто обслуживает вашу АТС?:</strong> ".$tPlan6."</p>\r\n";    
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "<center><img src='images/da.png'></center>";
} else {
	echo "<center><img src='images/net.png'></center>";
}

?>

</body>
</html>