<?php


use Core\Route;
use App\Controllers\Notas;
use App\Controllers\IndexController;
use App\Controllers\LoginController;
use App\Controllers\LogoutController;
use App\Controllers\Notas\CriarController;
use App\Controllers\RegisterController;
use App\Middlewares\GuestMiddleware;
use App\Middlewares\AuthMiddleware;

(new Route())

    ->get('/', IndexController::class, GuestMiddleware::class)
    ->get('/login', [LoginController::class, 'index'], GuestMiddleware::class)
    ->post('/login', [LoginController::class, 'login'], GuestMiddleware::class)
    
    ->get('/registrar', [RegisterController::class, 'index'], GuestMiddleware::class)
    ->post('/registrar', [RegisterController::class, 'register'], GuestMiddleware::class)


    ->get('/logout', LogoutController::class, AuthMiddleware::class)
    ->get('/notas', Notas\IndexController::class, AuthMiddleware::class)
    ->get('/notas/criar', [Notas\CriarController::class, 'index'], AuthMiddleware::class)
    ->post('/notas/criar', [Notas\CriarController::class, 'store'], AuthMiddleware::class)
    ->put('/nota', Notas\AtualizarController::class, AuthMiddleware::class)
    ->delete('/nota', Notas\DeleteController::class, AuthMiddleware::class)

    ->get('/mostrar', [Notas\VisualizarController::class, 'mostrar'], AuthMiddleware::class)
    ->get('/esconder', [Notas\VisualizarController::class, 'esconder'], AuthMiddleware::class)
    


    ->run();

die();

$controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);
if (! $controller) $controller = 'index';

if (! file_exists("../controllers/{$controller}.controller.php")) {
    abort(404);
}

require "../controllers/{$controller}.controller.php";
