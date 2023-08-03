<?php

use Pecee\SimpleRouter\SimpleRouter;
use Pecee\Http\Request;
use App\Controllers\ConfigController;

SimpleRouter::get('/', [ConfigController::class, 'showFormConfig']);
SimpleRouter::post('/create/config', [ConfigController::class, 'createConfig']);

SimpleRouter::error(function(Request $request, \Exception $exception) {
    switch($exception->getCode()) {
        // Page not found
        case 404:
            response()->redirect('/');
    }
});

SimpleRouter::start();