<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('index.html');
    echo $template->render(array());