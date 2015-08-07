<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('/Balance/balance-step3.html');
    echo $template->render(array());