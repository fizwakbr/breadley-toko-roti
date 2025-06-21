<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Google Font (Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet" />

  </head>

  <body>
    <?php include 'header.php'; ?>

    <!-- Carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active carousel-height-mobile">
          <img src="../img/hero/hero-1.jpg" class="d-block w-100 h-100" alt="..." />
        </div>
        <div class="carousel-item carousel-height-mobile">
          <img src="../img/hero/hero-2.jpg" class="d-block w-100 h-100" alt="..." />
        </div>
        <div class="carousel-item carousel-height-mobile">
          <img src="../img/hero/hero-3.jpg" class="d-block w-100 h-100" alt="..." />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- About Section -->
    <div class="about about-black">
      <h1>About Us</h1>
      <div class="tentang tentang-text-white">
        <img src="../img/logo.png" alt="Logo" />
        <p>
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae magni dignissimos officiis sunt cum tenetur voluptate voluptatibus. Dicta doloremque, laboriosam!
        </p>
      </div>
    </div>

<div class="shopping py-5 bg-black">
  <div class="container">
  <div class="row">
    
    <?php
    $product = ['Birthday Cake','Nastar','Croissant','Sourdough'];
    
  foreach ($product as $row){
      echo <<<HTML
      <div class="col-md-4 mb-4">
        <div class="card rounded h-100 bg-black border border-white text-white" style="width: 100%;">
          <img src="../img/product/$row.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"> $row </h5>
            <a href="#" class="btn btn-warning rounded-pill">Add Cart</a>
          </div>
        </div>
      </div>
HTML;
    
    }
    ?>
  </div>
  </div>
</div>

</div>

<section class="contact-section py-5">
  <div class="container">
    <h2 class="text-center mb-4 fw-bold">Lokasi Kami</h2>
    <p class="text-center mb-4 text-muted">Kunjungi toko kami secara langsung atau lihat di Google Maps di bawah ini.</p>
    
    <div class="map-wrapper mb-4">
      <div class="ratio ratio-16x9 rounded shadow">
<iframe 
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.4520389311955!2d107.61848431469156!3d-6.914744669723483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7f2c8c23455%3A0xbed1b7dd646ec4c9!2sCitul%20Mart!5e0!3m2!1sid!2sid!4v1710000000000!5m2!1sid!2sid"
  width="600" height="450" style="border:0;" 
  allowfullscreen="" loading="lazy" 
  referrerpolicy="no-referrer-when-downgrade">
</iframe>
      </div>
    </div>

    <p class="text-center fw-semibold fs-5">Jl. Citul No.99, Bandung, Indonesia</p>
  </div>
</section>


<?php include"footer.php" ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
