<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('/Project/list.html');
    echo $template->render(array());