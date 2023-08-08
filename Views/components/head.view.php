<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= Core\App::get('config')['domain_site'] . '/styles/style.css' ?>">
  <link rel="shortcut icon" href="<?= Core\App::get('config')['domain_site'] . '/favicon.ico' ?>" type="image/x-icon">

  <!-- Section of meta data you can put whatever you want -->
  <meta name="description" content="This is an open source microCMS that is easy to use and customize. It is built with PHP, and it is designed to be fast, scalable, and secure.">
  <meta name="keywords" content="microCMS, PHP, CMS, open source">
  <meta name="author" content="Your name">
  <meta name="robots" content="index, follow">

  <title>
    <?= $title; ?>
  </title>
  <script src="https://cdn.tiny.cloud/1/<?= Core\App::get('config')['KEY_API_TINY']; ?>/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>