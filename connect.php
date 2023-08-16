<?php

use Core\App;
use App\Models\User;
use Illuminate\Database\Capsule\Manager as Capsule;


$capsule = new Capsule;

$db = App::get('config')['database'];

$capsule->addConnection([
    'driver' => $db['type'],
    'host' => $db['host'],
    'database' => $db['database'],
    'username' => $db['user'],
    'password' => $db['password'],
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);


// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

try {
    $capsule->connection()->getPdo();
} catch (Exception $e) {
    echo 'Error to connect to database ' . $e->getMessage();
    unlink('config.php');
    die();
}


if (!$capsule->schema()->hasTable('posts') && !$capsule->schema()->hasTable('users')) {
    $postsTable = $capsule->schema()->create('posts', function ($table) {
        $table->bigIncrements('id');
        $table->string('title');
        $table->text('excerpt');
        $table->text('content');
        $table->string('featured_image', 255)->nullable();
        $table->date('published_on');
    });

    $usersTable = $capsule->schema()->create('users', function ($table) {
        $table->bigIncrements('id');
        $table->string('name');
        $table->string('email')->unique();
        $table->string('username')->unique();
        $table->string('password');
    });

    $user = User::firstOrCreate([
        'name' => 'User Admin',
        'email' => 'user@mail.com',
        'username' => 'admin',
        'password' => password_hash('1234', PASSWORD_DEFAULT)
    ]);
}
