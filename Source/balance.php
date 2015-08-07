<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('/Balance/balance.html');
    echo $template->render(array());