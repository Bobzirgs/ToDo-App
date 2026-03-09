<?php
require_once __DIR__ . '/../app/Controllers/TaskController.php';

$controller = new TaskController();

$uri = trim($_SERVER['REQUEST_URI'], '/');
$parts = explode('/', $uri);

switch($parts[0]) {
    case 'create':
        $controller->create($_POST['title'], $_POST['description']);
        break;
    case 'toggle':
        $controller->toggle($parts[1]);
        break;
    case 'delete':
        $controller->delete($parts[1]);
        break;
    case 'filter':
        $controller->index($parts[1]);
        break;
    default:
        $controller->index();
}