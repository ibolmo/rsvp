<?php

$URL = 'https://script.google.com/macros/s/AKfycbz2rN-aAQG8GquFxdcRtmg_IuNQpdyp4LLQEAxEH-nQXzI_cL1q/exec';

# todo(ibolmo): use caching
$json = json_decode(file_get_contents($URL), true);
$config = $json['config'];

if (preg_match('/\/rsvp/i', @$_SERVER['REQUEST_URI'])){
	header("Location: {$config['facebook.event']}");
	die;
}
