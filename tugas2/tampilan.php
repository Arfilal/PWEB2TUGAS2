<?php
if(isset($_GET['role'])){
    $role = $_GET['role'];
    
    if($role == "admin"){
        $x="?role=admin";
    }else if($role == "dosen"){
        $x="?role=dosen";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<h3 class="text-center">SELAMAT DATANG</h3>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TUGAS 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mahasiswa
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php<?=$x ?>">Data MAHASISWA</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Nilai Perbaikan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="nilai_perbaikan.php<?=$x ?>">Data Nilai Perbaikan</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php if(isset($role)){echo $role;}else{echo "kuasa";}?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="tampilan.php?role=admin">Administrator</a></li>
            <li><a class="dropdown-item" href="tampilan.php?role=dosen">Dosen</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>