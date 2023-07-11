<?php
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\SearchController;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::get('/', [HomeController::class, 'show']);
SimpleRouter::get('/posts/{id}', [HomeController::class, 'showPost']);
SimpleRouter::get('/login', [LoginController::class, 'showLogin']);

SimpleRouter::start();