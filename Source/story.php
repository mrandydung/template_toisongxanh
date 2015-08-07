<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('/Story/story.html');
    echo $template->render(array());