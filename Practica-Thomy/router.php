<?php

require_once 'app/controllers/ropa.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'home';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$ropaController = new RopaController();

// Separar acción y parámetros
$params = explode('/', $action);

// --- RUTEO ---
switch ($params[0]) {

    case 'home':
        $ropaController->home();
        break;
    case 'delete':
        $ropaController->delete();
        break;
    case 'add-ropa':
        $ropaController->addRopa();
        break;

    case 'view-edit-ropa':
        if ($params[1] === 'edit-ropa') {
            $ropaController->editRopa();
        } else {
            $ropaController->viewEditRopa($params[1]);
        }
        break;


    default:
        echo "404 Page Not Found";
        break;
}
