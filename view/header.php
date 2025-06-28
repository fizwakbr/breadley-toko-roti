<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link href="../css/header.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amaranth:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <title>Breadley</title>
  </head>
  <body>
    <header>
      <nav class="navbar sticky-top navbar-expand-lg navbar-cream  border-green-bottom ">
  <div class="container-fluid">
<div class="brand d-flex align-items-center">
  <img src="../img/logo.png" class="panestia-logo">
  <h3 class="panestia">| Panestia.</h3>
</div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-cream" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-cream" href="#">About</a>
        </li>
     <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>

      </ul>
<form class="d-flex align-items-center gap-2">
  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-green btn-outline-green" type="submit">Search</button>

  <!-- Cart Dropdown Button -->
  <div class="dropdown">
    <button class="btn icon-btn dropdown-toggle" type="button" id="cartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="bi bi-cart2"></i>
      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="cart-count">0</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end p-3" id="cart-dropdown-list" style="min-width: 250px;">
      <li class="text-muted text-center">Cart is empty</li>
    </ul>
  </div>
</form>
    </div>
  </div>
</nav>
    </header>
  