<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('/Customers/customer.html');
    echo $template->render(array());