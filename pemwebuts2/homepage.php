<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TokoKita - Gaming Gear</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Favicons -->
<link rel="icon" href="assets/img/T.svg">
  <!-- Custom CSS -->
  <style>
    /* Tambahkan gaya kustom di sini */
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">TokoKita</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#banner">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#products">Produk</a>
            </li>
            <li class="nav-item">
              <a href="https://wa.me/6281212740205" class="nav-link" href="#">Kontak</a>
            </li>
            <li class="nav-item">
              <a href="login.php" class="btn btn-success">LOGIN</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>



  <section id="poster" style="margin-top: 60px; margin-bottom: 100px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <img src="assets/img/wirman.jpg" alt="Poster" class="img-fluid w-100">
        <div class="poster-text">
          <h2 style="color: white; position: absolute; bottom: -120px; right: 200px; font-family: 'Oswald', Arial, sans-serif; font-weight: bold;font-size: 60px;">GAMING GEAR</h2>
        </div>
      </div>
    </div>
  </div>
</section>



  <section id="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>Kebebasan Bermain dengan Gaming Gear</h1>
          <p>Tokokita merupakan toko gaming gear terkemuka yang menghadirkan produk-produk berkualitas tinggi untuk para gamers.</p>
          <a href="login.php" class="btn btn-primary">Beli Sekarang</a>
        </div>
      </div>
    </div>
  </section>
  
  <section id="features">
    <div class="container">
      <h2 name ="tokokita" class="text-center">Kenapa Memilih Tokokita?</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="assets/img/feature1.png" alt="Feature 1" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Kualitas Premium</h5>
              <p class="card-text">Produk dibuat dengan bahan berkualitas tinggi untuk memberikan pengalaman gaming terbaik.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="assets/img/feature2.png" alt="Feature 2" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Desain Ergonomis</h5>
              <p class="card-text">Setiap produk didesain dengan ergonomi yang memperhatikan kenyamanan pengguna.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="assets/img/feature3.jpg" alt="Feature 3" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Performa Unggul</h5>
              <p class="card-text"> menyediakan gaming gear dengan performa unggul untuk meningkatkan skill dan pengalaman bermain.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="products">
    <div class="container">
      <h2 class="text-center">Produk TokoKita</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="assets/img/product1.png" alt="Product 1" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"> Keyboard</h5>
              <p class="card-text">Keyboard gaming dengan berbagai fitur dan teknologi terkini untuk meningkatkan performa Anda.</p>
              <a href="login.php" class="btn btn-primary">Beli Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="assets/img/product2.png" alt="Product 2" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"> Mouse</h5>
              <p class="card-text">Mouse gaming presisi tinggi dengan desain ergonomis dan tombol-tombol programable.</p>
              <a href="login.php" class="btn btn-primary">Beli Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="assets/img/product3.png" alt="Product 3" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"> Headset</h5>
              <p class="card-text">Headset gaming dengan kualitas suara superior dan kenyamanan saat digunakan dalam waktu lama.</p>
              <a href="login.php" class="btn btn-primary">Beli Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="contact">
    <div class="container">
      <h2 class="text-center">Hubungi Kami</h2>
      <div class="row">
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Pesan</label>
              <textarea class="form-control" id="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
          </form>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kontak Kami</h5>
              <p class="card-text">PT KUNING BERSATU ,Jl. Pamekar Barat II , NO 24</p>
              <p class="card-text">Email: tokokita@gmail.com</p>
              <p class="card-text">Telepon: 08986132963</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
<footer class="bg-light py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p class="mb-0">&copy; 2023 TokoKita. All rights reserved.</p>
      </div>
      <div class="col-md-6 text-end">
        <ul class="list-inline mb-0">
          <li class="list-inline-item"><a href="#">Tentang</a></li>
          <li class="list-inline-item"><a href="#">Produk</a></li>
          <li class="list-inline-item"><a href="#">Kontak</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Custom JS -->
  <script>
    // Tambahkan script kustom di sini
  </script>

  
</body>
</html>
