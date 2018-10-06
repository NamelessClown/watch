<?php

	$text = "Hello world, this is my first Alexa Skill";
	$echoRequest   = json_decode(file_get_contents('php://input'));
	$whatiwant   = $echoRequest->request->intent->slots->color->value;



	$array = array("version" => "1.0","response" => array("outputSpeech"=>array("type"=>"PlainText","text"=>$whatiwant)));

	echo json_encode($array);




?>
