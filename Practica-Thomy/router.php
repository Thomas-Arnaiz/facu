<?php

require_once 'app/controllers/alumnos.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'home';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$alumnosController = new AlumnosController();

// Separar acción y parámetros
$params = explode('/', $action);

// --- RUTEO ---
switch ($params[0]) {

    case 'home':
        $alumnosController->home();
        break;

    default:
        echo "404 Page Not Found";
        break;
}
