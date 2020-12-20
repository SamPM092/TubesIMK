<?php

require 'db_connect.php';

?>

<h1> Selamat Datang, <?php echo $dosen["nama"]; ?> </h1>
<h5> NIP :  <?php echo $dosen["nip"]; ?> </h4>
<h5>Daftar Mahasiswa :</h5>
 <table border="2" cellpadding="10">
        <tr bgcolor = "#00BFFF">
            <td>NO</td>
            <td>NIM</td>
            <td>Nama</td>
            <td>Progrres</td>
            <td>NO HP</td>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo $mahasiswa["nim"]; ?></td>
            <td><?php echo $mahasiswa["nama"]; ?></td>
            <td><?php echo $mahasiswa["prog"]; ?></td>
            <td><a href="http://wa.me/<?=$mahasiswa['noHP'] ?>"> <?php echo $mahasiswa["noHP"]; ?></td>
        </tr>
    </table>
</ul>
