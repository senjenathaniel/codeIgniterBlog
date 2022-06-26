<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Document</title>
  <!-- Load google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,700;1,300;1,700&family=Nunito+Sans:wght@200;400;700&display=swap"
    rel="stylesheet">

  <style>
    body {
      font-family: 'Merriweather', serif;
    }

    header {
      font-family: 'Nunito Sans', sans-serif;
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/embed@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/@editorjs/code@2.0.0"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/@editorjs/delimiter@1.0.1"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
</head>

<body>

  <header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap" /></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/admin" class="nav-link px-2 link-secondary">Dashboard</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Blogs</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Users</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="/admin/create">Create New</a></li>
            <li><a class="dropdown-item" href="/admin/profile">Profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="/admin/lougout">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>