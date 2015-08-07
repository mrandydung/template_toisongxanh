<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('/Balance/thank-you.html');
    echo $template->render(array());