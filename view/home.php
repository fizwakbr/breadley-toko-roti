<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Google Font (Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amaranth:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet" />

  </head>

  <body>
    <?php include 'header.php'; ?>

    <!-- Carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active carousel-height-mobile">
          <img src="../img/hero/hero-1.png" class="d-block w-100 h-100" alt="..." />
        </div>
        <div class="carousel-item carousel-height-mobile">
          <img src="../img/hero/hero-2.png" class="d-block w-100 h-100" alt="..." />
        </div>
        <div class="carousel-item carousel-height-mobile">
          <img src="../img/hero/hero-3.png" class="d-block w-100 h-100" alt="..." />
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
    <div class="about about-green">
      <div class="highlight-about mb-4">
      <h1>About Us</h1>
      </div>
      <div class="tentang about-cream">
        <img class="" src="../img/logo.png" alt="Logo" />
        <p>
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae magni dignissimos officiis sunt cum tenetur voluptate voluptatibus. Dicta doloremque, laboriosam!
        </p>
      </div>
    </div>

<div class="shopping py-5 bg-green">
  <div class="container ">
    <div class="d-flex justify-content-center mb-4">
    <div class="highlight-product">
    <h1 class="product text-center text-white mb-2">Product</h1>
    </div>
    </div>
  <div class="row">
    
    <?php
    $product = ['Birthday Cake','Nastar','Croissant','Sourdough'];
    
  foreach ($product as $row){
      echo <<<HTML
<div class="col-md-4 mb-4 d-flex justify-content-center">
  <div class="product-card text-center">
    <div class="product-image">
      <img src="../img/product/{$row}.png" alt="Croissant">
    </div>
    <h5 class="product-title mt-3">{$row}</h5>
    <div class="product-icons mt-2">
       <button class="icon-btn"><i class="bi bi-cart2"></i></button>
  <button class="icon-btn"><i class="bi bi-eye"></i></button>
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


<!-- ini contact section -->


<section class="contact-section py-5">
  <div class="container">
        <div class="d-flex justify-content-center mb-4">
    <div class="highlight-contact">
    <h1 class="text-center mb-2 ">Kontak kami</h2>
    </div>
    </div>
    <p class="text-center mb-4 ">
      Kunjungi toko kami secara langsung atau lihat di Google Maps di bawah ini.
    </p>

    <div class="row g-4 align-items-stretch">
      <!-- Form Kontak -->
      <div class="col-md-6">
        <div class="kontak h-100 p-4 bg-dark text-white rounded shadow d-flex flex-column justify-content-between">
          <div>
            <div class="input-group mb-3">
              <span class="input-group-text">Email</span>
              <input type="text" class="form-control border border-cream bg-dark text-white" placeholder="Masukkan email kamu">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Nama</span>
              <input type="text" class="form-control bg-dark text-white" placeholder="Masukkan nama kamu">
            </div>
            <div class="input-group mb-3 ">
              <span class="input-group-text">Pesan</span>
              <textarea class="form-control bg-dark text-white" rows="4" placeholder="Tulis pesan di sini"></textarea>
            </div>
          </div>
          <button class="btn btn-warning mt-2 align-self-end">Kirim</button>
        </div>
      </div>

      <!-- Google Map -->
      <div class="col-md-6">
        <div class="map-wrapper h-100 rounded shadow overflow-hidden">
          <iframe 
            class="w-100 h-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.4520389311955!2d107.61848431469156!3d-6.914744669723483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7f2c8c23455%3A0xbed1b7dd646ec4c9!2sCitul%20Mart!5e0!3m2!1sid!2sid!4v1710000000000!5m2!1sid!2sid"
            style="border:0;" allowfullscreen="" loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>

    <p class="text-center fw-semibold fs-5 mt-4">Jl. gw gatau namanya bjir</p>
  </div>
</section>



<?php include"footer.php" ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../script/script.js"></script>
      
  </body>
</html>
