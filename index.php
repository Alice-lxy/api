<?php
	//aaa
	$type = $_GET['type'];
	$data = [
		'name'	=> 'lxy',
		'sex'	=> '是',
		'age'	=> 111,
		'type'	=> $type
	];
	echo json_encode($data);
