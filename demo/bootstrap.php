<?php
/**
 * 静态相关
 */
 function D($var){
	echo "<pre>";
	var_dump($var);
	echo "<pre>";
	exit;
 }
define('APP', dirname(__FILE__));

define('ROOT', 'http://localhost/web_3.0/PPL/bin/P2H/demo/');
define('NEWS_ROOT', ROOT.'news/');
define('IT_ROOT', NEWS_ROOT.'it/');
define('DS', DIRECTORY_SEPARATOR);

define('M5CPL', 'just a test');

date_default_timezone_set('PRC');

require_once dirname(APP).'/P2H.php';
P2H::initConfig(require(APP.'/config/P2HConfig.php'));

//var_dump(P2H::getVars());exit;

?>