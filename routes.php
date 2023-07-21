<?php

use App\Controllers\AdminController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\PostController;
use App\Controllers\UserController;
use Pecee\SimpleRouter\SimpleRouter;
use Pecee\Http\Request;

use Middlewares\AdminMiddleware;

SimpleRouter::get('/', [HomeController::class, 'show']);
SimpleRouter::get('/posts/{id}', [HomeController::class, 'showPost']);
SimpleRouter::get('/not-found', [HomeController::class, 'showNotFound']);
SimpleRouter::get('/login', [LoginController::class, 'showLogin']);
SimpleRouter::get('/logout', [LoginController::class, 'logout']);
SimpleRouter::post('/login', [LoginController::class, 'login']);

SimpleRouter::group(['middleware' => AdminMiddleware::class], function () {
  SimpleRouter::get('/admin', [AdminController::class, 'showAdmin']);
  SimpleRouter::get('/admin/write/{id?}', [AdminController::class, 'showWritePost']);
  SimpleRouter::post('/admin/new-post', [PostController::class, 'savePost']);
  SimpleRouter::post('/admin/delete/post/{id?}', [PostController::class, 'deletePost']);
  SimpleRouter::get('/signin', [LoginController::class, 'showSignin']);
  SimpleRouter::post('/signin', [UserController::class, 'addUser']);
});


SimpleRouter::error(function(Request $request, \Exception $exception) {
    switch($exception->getCode()) {
        // Page not found
        case 404:
            response()->redirect('/not-found');
    }
});

SimpleRouter::start();