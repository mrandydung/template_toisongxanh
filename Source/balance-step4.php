<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('/Balance/balance-step4.html');
    echo $template->render(array());