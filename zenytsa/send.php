<?
header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");

$json = file_get_contents("php://input");
$data = json_decode($json, true);

if ( isset($data['name']) && !empty($data['name']) && isset($data['phone']) && !empty($data['phone']) && isset($data['message']) && !empty($data['message'])){

	/* получатели */
	$to = "eugene@glavnicky.com";

	/* тема/subject */
	$subject = "Информационное сообщение сайта Zenytsa";

	/* сообщение */
	$message = '
	<html>
	<head><title></title></head>
	<body>

	Информационное сообщение с сайта Zenytsa<br/>
	------------------------------------------<br/><br/>
	Новая почта с сайта Zenytsa<br/><br/>

	Имя: '.$data['name'].'<br/>
	Телефон: '.$data['phone'].'<br/>
	Сообщение: '.$data['message'].'<br/><br/>

	</body>
	</html>';

	$headers= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: info@inbrief_site.ru\r\n";

	if (mail($to, $subject, $message, $headers)) { 
		echo json_encode(["response" => "success"], JSON_UNESCAPED_UNICODE); 
	} else { 
		echo json_encode(["response" => "error"], JSON_UNESCAPED_UNICODE); 
	} 
} else {
	echo json_encode(["response" => "error"], JSON_UNESCAPED_UNICODE);
}
 
?>