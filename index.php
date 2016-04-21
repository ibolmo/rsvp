<?php

if (preg_match('/\/rsvp/i', @$_SERVER['REQUEST_URI'])){
	if (!file_exists('./config.json')){
		echo 'Need to update!';
		die;
	}

	$json = json_decode(file_get_contents('./config.json'), true);
	$config = $json['config'];
	header("Location: {$config['facebook.event']}");
	die;
}

if (preg_match('/\/update/i', @$_SERVER['REQUEST_URI'])){
	$URL = 'https://script.google.com/macros/s/AKfycbz2rN-aAQG8GquFxdcRtmg_IuNQpdyp4LLQEAxEH-nQXzI_cL1q/exec';
	$json = file_get_contents($URL);
	file_put_contents('./config.json', $json);
	die;
}
