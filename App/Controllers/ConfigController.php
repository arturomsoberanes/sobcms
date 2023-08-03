<?php

namespace App\Controllers;

class ConfigController
{
    public static function checkIfConfigExists($config_file)
    {
        if (!file_exists($config_file)) {
            return false;
        }
        return true;
    }
    public function showFormConfig() {
      return view('create-config');
    }
    public function createConfig()
    {
        // Get the form data
        $database_type = $_POST['database_type'];
        $database_host = $_POST['database_host'];
        $database_name = $_POST['database_name'];
        $database_user = $_POST['database_user'];
        $database_password = $_POST['database_password'];
        $error_handling = isset($_POST['error_handling']) ? true : false;
        $domain_site = $_POST['domain_site'];
        $KEY_API_TINY = $_POST['KEY_API_TINY'];

        // Create the config file
        $config = <<<CONFIG
<?php

return [
  'database' => [ // Credentials of the database
    'type' => '$database_type',
    'host' => '$database_host',
    'database' => '$database_name',
    'user' => '$database_user',
    'password' => '$database_password',
  ],
  'error_handling' => '$error_handling', //if the site is in production this should be in false
  'domain_site' => '$domain_site', // Your domain
  'KEY_API_TINY' => '$KEY_API_TINY', // Go to tiny.cloud for more information
];

CONFIG;

        // Save the config file
        file_put_contents('config.php', $config);

        return redirect('/');
    }
}
