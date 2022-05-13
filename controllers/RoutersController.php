<?php

//          API             //

/*
obj RoutersController(string $currentPage = "текущий урл $_SERVER['REQUEST_URI']", array $routes = "массив с маршрутами")

Пример
$routes = [
    '/'         => '../index.php',
    '/about/'   => '../about.php',
    '/contact/' => '../contact.php',
    '/404/'     => '../404.php'
];

*/

class RoutersController {

    private $currentPage;
    private $routes;

    public function __construct($currentPage, $routes) {

        $this->currentPage = $currentPage;
        $this->routes = $routes;

        if (array_key_exists($this->currentPage, $this->routes)) {
            include($this->routes[$this->currentPage]);
            exit;
        } else {
            header("Location: /404/");
            exit;
        }
    }
}
?>