<?php
	date_default_timezone_set ( 'Asia/Saigon');
	require_once 'Twig-1.18.0/lib/Twig/Autoloader.php';
     Twig_Autoloader::register();
     $templateDir = realpath('./templates'); 
     
     $loader = new Twig_Loader_Filesystem($templateDir);
     
     $twig = new Twig_Environment($loader, array(
       'cache' => './cache',
       'debug' => true,
       'charset' => 'utf-8'
      ));
	   
		$function = new Twig_SimpleFunction('translate', function ($v) {
			return $v;
			$arr = array('Đặt xe taxi' =>'Taxi Booking' );
			return isset($arr[$v])?$arr[$v]:$v;
		});
		$twig->addFunction($function);
     $twig->enableAutoReload(true);