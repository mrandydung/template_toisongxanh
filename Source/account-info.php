<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('/Account/account-info.html');
    echo $template->render(array());