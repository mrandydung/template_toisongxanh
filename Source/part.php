<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('/Project/part.html');
    echo $template->render(array());