<!DOCTYPE html>
<html>
<head>
	<title>DATA NILAI PERBAIKAN</title>
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
            Data Nilai Perbaikan
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

	<h3 class= "text-center">DATA NILAI PERBAIKAN</h3>
	<table class="m-auto  table table-bordered w-75">
		<tr>
			<th>NO</th>
			<th>Perbaikan</th>
			<th>tgl_perbaikan</th>
			<th>Keterangan</th>
			<th>Mahasiswa</th>
			<th>Matkul</th>
			<th>Semester</th>
			<th>Nilai</th>
			<th>Dosen</th>
		</tr>
		<?php 
		include 'koneksi.php';
		if($_GET['role'] == "admin"){
			$query = "SELECT * FROM nilai_perbaikan";
		}else if($_GET['role']=="dosen"){
			$query = "select * from nilai_perbaikan limit 10";
		}
		$no = 1;
		$connection = new connection();
		$data = $connection->koneksi()->query("$query") ;
		foreach($data as $d){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['perbaikan']; ?></td>
				<td><?php echo $d['tgl_perbaikan']; ?></td>
				<td><?php echo $d['keterangan']; ?></td>
                <td><?php echo $d['mahasiswa_id']; ?></td>
				<td><?php echo $d['matkul']; ?></td>
				<td><?php echo $d['semester']; ?></td>
				<td><?php echo $d['nilai']; ?></td>
				<td><?php echo $d['dosen']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>