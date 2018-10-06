<?php

	$text1 = "Hello world, this is my first Alexa Skill";

	$text = var_dump($_POST);



	$array = array("version" => "1.0","response" => array("outputSpeech"=>array("type"=>"PlainText","text"=>$text)));

	echo json_encode($array);




?>
