<?php 

//koneks database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form
$id =  $_POST['id'];
$nis = $_POST['nis']; 
$nama = $_POST['nama'];  
$jk = $_POST['jk']; 
$tgl_lahir = $_POST['tgl_lahir']; 
$kelas = $_POST['kelas']; 
$jurusan = $_POST['jurusan']; 
$keterangan = $_POST['keterangan']; 

//menginput data ke database
mysqli_query($koneksi, "insert into siswa value ('$id', '$nis', '$nama', '$jk', '$tgl_lahir', '$kelas', '$kelas', '$jurusan', '$keterangan')");

//mengalihkan halaman kembali ke kelas.php
header("location:kelas.php") 

?>