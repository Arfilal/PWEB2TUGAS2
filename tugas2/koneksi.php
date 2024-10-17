<?php
class connection{
private $servername = "localhost"; 
private $username = "root";         
private $password = "";             
private $dbname = "pwebtugas2";  

public function koneksi(){
    $db = new mysqli ($this->servername, $this->username, $this->password, $this->dbname);
    return $db;
}
}

abstract class operasi extends connection
{
    public function selectall($tabel)
    {
        $querry = "select * from $tabel";
        return parent ::__construct()->querry($querry);
    }

    abstract function tblmahasiswa();
}

class dosen extends operasi
{
    public function tblmahasiswa()
    {
        $data = parent::__construct()->querry("select * from mahasiswa");
        ?>
     <tr>
                <th>NIM</th> 
                <th>Nama</th> 
                <th>Alamat</th> 
                <th>Email</th> 
                <th>No.Telp</th> 
    </tr>    
    <?php
    foreach ($data as $i){
        ?>
        <tr>
        <td><?= $i['nim']?></td>
        <td><?= $i['nama_mhs']?></td>
        <td><?= $i['alamat']?></td>
        <td><?= $i['email']?></td>
        <td><?= $i['no_telp']?></td>
            
        </tr>    
    <?php
    }  
    }
}
class admin extends operasi
{
    public function tblmahasiswa()
    {
        $data = $this->selectall("mahasiswa");
        ?>
        <tr>
                <th>NIM</th> 
                <th>Nama</th> 
                <th>Alamat</th> 
                <th>Email</th> 
                <th>No.Telp</th> 
                <th>Edit</th> 
    </tr>    
    <?php
    foreach ($data as $i){
        ?>
         <tr>
        <td><?= $i['nim']?></td>
        <td><?= $i['nama_mhs']?></td>
        <td><?= $i['alamat']?></td>
        <td><?= $i['email']?></td>
        <td><?= $i['no_telp']?></td>
            
        </tr>    
    <?php
    }
    }
}
?>
