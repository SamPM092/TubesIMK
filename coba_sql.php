<?php
$con = mysqli_connect('localhost','root','','imk_book'); //koneksi database
if($con){
  echo "Koneksi berhasil";
} else {
  echo "Tidak terhubung";
}

$sql = ("SELECT * from admin");
$query = mysqli_query($con,$sql); //Fungsi ini digunakan untuk mengirimkan perintah SQL ke server MySQL untuk melakukan aktivitas CRUD
$data = mysqli_fetch_assoc($query); //mengembalikan nilai array

 ?>


 <div class="nama">
   <h1>Nama-nama admin : </h1>
   <table>
     <?php $num = 0; do{ $num++ ?>
     <tr>
       <td><?=$data['nama_admin'];?></td>
     </tr>
   <?php }while($data = mysqli_fetch_assoc($query));?>
   </table>
