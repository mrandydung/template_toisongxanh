<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('/Balance/balance-step2.html');
    echo $template->render(array());