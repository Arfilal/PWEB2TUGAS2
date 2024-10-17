<!DOCTYPE html>
<html>
<head>
    <title>DATA MAHASISWA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
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
            Data Mahasiswa 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="tampilan.php">Kembali</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h3 class="container text-center">DATA MAHASISWA</h3>
<table class="m-auto table table-bordered w-75">
    <tr>
        <th>NO</th>
        <th>Mahasiswa</th>
        <th>Nim</th>
        <th>Nama_mhs</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>No_telp</th>
    </tr>
    <?php 
    include 'koneksi.php';
    $no = 1;
    $connection = new connection();

    if(isset($_GET['role'])) {
        $role = $_GET['role'];

        if($role == "admin") {
            $query = "SELECT * FROM mahasiswa";
        } else if($role == "dosen") {
            $query = "SELECT * FROM mahasiswa LIMIT 10";
        } else {
            $query = "";
        }
    } else {
        $query = "";
    }

    if(!empty($query)) {
        $data = $connection->koneksi()->query($query);
        foreach($data as $d) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['mahasiswa']; ?></td>
                <td><?php echo $d['nim']; ?></td>
                <td><?php echo $d['nama_mhs']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['no_telp']; ?></td>
            </tr>
            <?php 
        }
    } else {
        echo "<tr><td colspan='7'>Klik data Mahasiswa di navbar dan klik kembali untuk memulai</td></tr>";
    }
    ?>
</table>
</body>
</html>
