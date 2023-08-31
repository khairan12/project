<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Aplikasi pengaduan masyarakat </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Daftar Akun</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
      case  'login':
        include 'login.php';
        break;
      case  'register_1':
        include 'register_1';
        break;
      default:
        echo "Halaman tidak tersedia";
        break;
    }
  } else {
    include 'data_laporan.php';
  }
  ?>
  <footer class="footer py-2 bg-light fixed-bottom">
    <div class="container">
      <p class="text=center">UKK RPL 2023 / NAMA PESERTA / NAMA SEKOLAH</p>
    </div>
  </footer>
  <script type"text/javascript" src"asserts/js/bootstrap.min.js"></script>
</body>

</html>