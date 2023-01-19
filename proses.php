<?php
include("conn.php");
if(isset($_POST['join-table.php'])){
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $nama_jurusan=$_POST['nama_jurusan'];
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal'];

    $sql = "INSERT INTO tb_siswa(nama,kelas) VALUES ('$nama', '$kelas')";
    $sql = "INSERT INTO tb_jurusan(nama_jurusan) VALUES ('$nama_jurusan')";
    $sql = "INSERT INTO tb_spp(tahun,nominal) VALUES ('$tahun', '$nominal')";

    $sql = "INSERT INTO tb_jurusan (nama_jurusan) VALUES ('$nama_jurusan')";
    $query = mysqli_query($conn, $sql);

    $sql = "SELECT max (id_jurusan) AS jurusan_id FROM tb_jurusan LIMIT 1";
    $query = mysqli_query($conn, $sql); 

    $sql = "INSERT INTO tb_spp (tahun, nominal) VALUES ('$tahun','$nominal')";
    $query = mysqli_query($conn, $sql);

    $sql = "SELECT max (id_jurusan) AS jurusan_id FROM tb_jurusan LIMIT 1";
    $query = mysqli_query($conn, $sql); 

    $data = mysqli_fetch_array($query);
    $jurusan_id=$data['$jurusan_id'];

    $sql = "SELECT max (id_spp) AS fast_id FROM tb_spp LIMIT 1";
    $query = mysqli_query($conn, $sql); 

    $data = mysqli_fetch_array($query);
    $fast_id=$data['fast_id'];

    $sql = "INSERT INTO tb_siswa(nama, kelas, id_jurusan, id_spp) VALUES ('$nama', '$kelas', '$jurusan_id', '$fast_id')";
    $query = mysqli_query($conn, $sql);

  

}
?>