<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('/Project/id.html');
    echo $template->render(array());