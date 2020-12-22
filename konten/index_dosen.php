<?php

require 'header.php';

$sql = "SELECT * from dosen";
$ambildosen = $con -> query($sql);

$sql2 = "SELECT * from mahasiswa";
$ambilmahasiswa = $con -> query($sql2);

?>
<h1> Selamat Datang (Nama Mahasiswa) </h1>
<h5> Dengan NIM (NIM) </h5>

<h5>Daftar Mahasiswa :</h5>
 <table border="2" cellpadding="10">
        <tr bgcolor = "#00BFFF">
            <td>NO</td>
            <td>NIM</td>
            <td>Nama</td>
            <td>Progrres</td>
            <td>NO HP</td>
            <td>Download</td>
        </tr>
        <?php while($mahasiswa = $ambilmahasiswa -> fetch_assoc()) { ?>
        <tr>
            <td>1</td>
            <td><?php echo $mahasiswa["NIM"]; ?></td>
            <td><?php echo $mahasiswa["Nama"]; ?></td>
            <td><?php echo $mahasiswa["Progress"]; ?></td>
            <td><a href="http://wa.me/<?=$mahasiswa['noHP'] ?>"> <?php echo $mahasiswa["noHP"]; ?></td>
            <td><a href="download.php">Download</a></td>
        </tr>
      <?php } ?>
    </table>
</ul>
