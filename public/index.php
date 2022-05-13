<?php

include('../functions.php');

$routes = [
    '/'         => '../index.php',
    '/about/'   => '../about.php',
    '/contact/' => '../contact.php',
    '/404/'     => '../404.php'
];

include('../controllers/RoutersController.php');

$currentPage = $_SERVER['REQUEST_URI'];

new RoutersController($currentPage, $routes);

?>