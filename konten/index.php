<?php

require 'header.php';

?>

<script>
function myFunction1() {
  document.getElementById("paragraph").innerHTML = "Paragraph changed.";
}
function myFunction2() {
  document.getElementById("paragraph").innerHTML = "Paragraph changed2.";
}
function myFunction3() {
  document.getElementById("paragraph").innerHTML = "Paragraph changed3.";
}
function myFunction4() {
  document.getElementById("paragraph").innerHTML = "Paragraph changed4.";
}
function myFunction5() {
  document.getElementById("paragraph").innerHTML = "Paragraph changed5.";
}
</script>

<!-- JIKA USER LEVEL = MAHASISWA-->
<h1> Selamat Datang (Nama Mahasiswa) </h1>
<h5> Dengan NIM (NIM) </h4>
<a href="chat_dosen.php"> (Ambil nama dosen dari database) </a>

<div class="tugas">
  <span class="list_tugas"><a type="button" onclick="myFunction1()"> 1 </a></span>
  <span class="list_tugas"><a type="button" onclick="myFunction2()"> 2 </a></span>
  <span class="list_tugas"><a type="button" onclick="myFunction3()"> 3 </a></span>
  <span class="list_tugas"><a type="button" onclick="myFunction4()"> 4 </a></span>
  <span class="list_tugas"><a type="button" onclick="myFunction5()"> 5 </a></span>
</div>
<div>
<p id="paragraph"> KONSEPNYA BEGINI TAPI MASIH SALAH</p>
</div>
