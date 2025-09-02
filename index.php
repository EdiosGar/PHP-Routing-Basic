<?php
// Shear the solution
$request = substr($_SERVER['REQUEST_URI'], 18);
// $request = $_SERVER['SERVER_NAME'];
// $request = str_replace($_SERVER['REQUEST_URI'],'/',$_SERVER['REQUEST_URI']);
$viewDir = '/views/';

switch ($request) {
    case '':
    case '/':
        require __DIR__ . $viewDir . 'home.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}

echo "Request: $request";
echo "<br>";
echo "Ruta home: " . __DIR__ . $viewDir . 'home.php';
?>