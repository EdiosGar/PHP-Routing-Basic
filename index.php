<?php

if($_SERVER["SERVER_NAME"] == 'localhost'){
    $nameCarpetaLocal = '/php-routing-basic/';
    $request = str_replace($nameCarpetaLocal, '/', $_SERVER['REQUEST_URI']);
} else {
    $request = $_SERVER['REQUEST_URI'];
}

$viewDir = '/views/';

switch ($request) {
    case '':
    case '/':
        require __DIR__ . $viewDir . 'home.php';
        break;
    case '/contact':
        require __DIR__ . $viewDir . 'contact.php';
        break;
    case '/users':
        require __DIR__ . $viewDir . 'users.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}

echo "Request: $request";
echo "<br>";
echo "Path View: " . __DIR__ . $viewDir . 'home.php';
echo "<br>";
echo "Domanin: ".$_SERVER["SERVER_NAME"];
?>