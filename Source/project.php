<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('/Project/project.html');
    echo $template->render(array());