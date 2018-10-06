<?php

	$text = "Hello world, this is my first Alexa Skill";





	$array = array("version" => "1.0","response" => array("outputSpeech"=>array("type"=>"PlainText","text"=>$text)));

	echo json_encode($array);




?>
