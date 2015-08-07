<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('/Donate/donate.html');
    echo $template->render(array());