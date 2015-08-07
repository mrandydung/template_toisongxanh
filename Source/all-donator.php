<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('/Donate/all-donator.html');
    echo $template->render(array());