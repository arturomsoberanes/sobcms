<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Create Config</title>
  <style>
    body {
      min-height: 100vh;
      padding:2em;
    }

    form {
      width: 90%;
      max-width: 600px;
    }
  </style>
</head>

<body class="bg-dark text-white d-flex justify-content-center align-items-center">
  <form action="/create/config" method="post" class="needs-validation" class="border border-warning rounded p-3">
    <h1 class="text-center">Create Config</h1>
    <p class="m-3 text-center">
      Please complete this form for create your config file!! 😁
    </p>
    <div class="form-group mb-3">
      <label for="database_type">Database type</label>
      <input type="text" class="form-control" name="database_type" id="database_type" placeholder="pgsql, mysql, etc." required>
    </div>
    <div class="form-group mb-3">
      <label for="database_host">Database host</label>
      <input type="text" class="form-control" name="database_host" id="database_host" placeholder="Database host" required>
    </div>
    <div class="form-group mb-3">
      <label for="database_name">Database name</label>
      <input type="text" class="form-control" name="database_name" id="database_name" placeholder="Database name" required>
    </div>
    <div class="form-group mb-3">
      <label for="database_user">Database user</label>
      <input type="text" class="form-control" name="database_user" id="database_user" placeholder="Database user" required>
    </div>
    <div class="form-group mb-3">
      <label for="database_password">Database password</label>
      <input type="password" class="form-control" name="database_password" id="database_password" placeholder="Database password" required>
    </div>
    <div class="form-group mb-3">
      <input type="checkbox" class="form-check-input" name="error_handling" id="error_handling" value="true">
      <label class="form-check-label" for="error_handling">Error handling</label>
      <p>If your site is in production this option should be unselected</p>
    </div>
    <div class="form-group mb-3">
      <label for="domain_site">Domain site without https/http:</label>
      <input type="text" class="form-control" name="domain_site" id="domain_site" placeholder="mydomain.com" required>
    </div>
    <div class="form-group mb-3">
      <label for="KEY_API_TINY">KEY_API_TINY</label>
      <input type="text" class="form-control" name="KEY_API_TINY" id="KEY_API_TINY" placeholder="KEY_API_TINY" required>
    </div>
    <button type="submit" class="btn btn-warning">Create config</button>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>