<?php

use Core\App;
use Core\Auth;
use App\Controllers\ConfigController;

if (!ConfigController::checkIfConfigExists('config.php')) {
  require 'route-config.php';
  die();
}

App::set('config', require 'config.php');

if (App::get('config')['error_handling']) {
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  // error_reporting(E_ALL & ~E_DEPRECATED);
  error_reporting(E_ALL);
}

Auth::ensureSessionStarted();