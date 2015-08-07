<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('/Balance/balance_2.html');
    echo $template->render(array());