<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('/Account/account-config.html');
    echo $template->render(array());