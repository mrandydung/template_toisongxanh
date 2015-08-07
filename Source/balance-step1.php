<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('/Balance/balance-step1.html');
    echo $template->render(array());