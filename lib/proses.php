<?php
    include "koneksi.php";
    if(isset($_POST['komentar'])){
        $id_buku=$_POST['id_buku'];
        $nama=mysqli_real_escape_string($konek, $_POST['nama']);
        $isi=mysqli_real_escape_string($konek, $_POST['isi']);
        $tgl=date("Y-m-d H:i:s");

        $query = "INSERT INTO tb_komentar VALUES(NULL, $id_buku, '$nama', '$isi', 0, '$tgl')";
        $hasil = mysqli_query($konek, $query);
        if ($hasil)
            header('location: ../index.php?p=buku_detail&id_buku='.$id_buku.'&a=komentar_sukses');
        else
            header('location: ../index.php?p=buku_detail&id_buku='.$id_buku.'&a=komentar_gagal');
            // echo "Gagal";

    }