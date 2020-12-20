<?php

include "db_connect.php";

$err = '';
if (isset($_POST['login']) && $_POST['login'] == "LOGIN") {
  $nama = $_POST['Nama'];
  $pass = $_POST['Password'];

  $sql = "SELECT * from mahasiswa where Nama = '$nama' and Password = '$pass'";
  $query = mysqli_query($con,$sql);
  $data = mysqli_fetch_assoc($query);

  if (mysqli_num_rows($query) > 0) {
    session_start();

    $_SESSION['NIM'] = $data['NIM'];
    $_SESSION['login'] = true;
    header('location:konten/index.php');
  } else {
    $err = "Username atau Password salah !!";
  }
}

 ?>

<html>
 <head>
   <title> Login Admin </title>
 <link rel="stylesheet" href="css/l.css">
 </head>
 <body style="background-image: url(css/.jpg); background-size: cover">
  <div class="login-page">
    <form action="" method="post">
      <h3>LOGIN</h3>
      <div style="color: wheat">  Username :</div><input type="text" name="Nama" title="masukkan nama"><br>
      <div style="color: wheat">  Password :</div><input type="password" name="Password" title="masukkan password"><br>
      <div style="color: white; font-size: 12px"><center>Belum memiliki akun? Register akun di <a href="register.php" style="color: red">sini</a></center></div>
       <span class="tombol">
      <input type="submit" name="login" value="LOGIN">
      <button type="submit" class="keluar" style="margin-left: 30px;"><a href="../index.php" style="text-decoration: none; color: crimson">Kembali</a></button>
       </span>
    <br>
   </form>
   </div>

  <div><a href="konten/index.php">TOMBOL SEMENTARA</a></div>
 </body>
