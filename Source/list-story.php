<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('/Story/list-story.html');
    echo $template->render(array());