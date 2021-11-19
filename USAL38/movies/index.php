<?php 
require 'inc/header.php';

$page = $_GET['page'] ?? 'home';

switch($page) 
{
    case 'home':
        require 'inc/home.php';
        break;
    case 'categories':
        require 'inc/categories.php';
        break;
    default:
        require 'inc/error.php';
    break;
}

require 'inc/footer.php';

/*
if($page === 'home') {
    require 'inc/home.php';
}
else if($page ==='all') {
    require 'inc/all.php';
}
else {
    require 'inc/error.php';
}
*/



?>