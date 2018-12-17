<?php
    include "koneksi.php";
    include "CRUD.php";
    if(isset($_POST['tambah'])){
        $judul=mysqli_real_escape_string($konek, $_POST['judul']);
        $pengarang=mysqli_real_escape_string($konek, $_POST['pengarang']);
        $penerbit=mysqli_real_escape_string($konek, $_POST['penerbit']);
        $harga=$_POST['harga'];
        $halaman=$_POST['halaman'];
        $kategori=$_POST['kategori'];
        $sinopsis= htmlspecialchars(mysqli_real_escape_string($konek, $_POST['sinopsis']));
        $stok=$_POST['stok'];
        $rating=$_POST['rating'];
        $cover = $_FILES["cover"]["name"];
        $tmp_cover = $_FILES["cover"]["tmp_name"];
        $target = "../../img/book/";
        $upload = upload_img($tmp_cover, $cover, $target);
        $form_data = array(
            'judul_buku' => $judul,
            'pengarang' => $pengarang,
            'penerbit' => $penerbit,
            'harga' => $harga,
            'halaman' => $halaman,
            'id_kategori' => $kategori,
            'sinopsis' => $sinopsis,
            'stok' => $stok,
            'cover' => $cover,
            'rating' => $rating,
            'best' => 0
        );
        if ($upload==true) {
            $query = insert('tb_buku', $form_data);
            $hasil = mysqli_query($konek, $query);
            if ($hasil)
                header('location: ../index.php?p=data&a=insert_sukses');
            else
                header('location: ../index.php?p=data&a=insert_gagal');
        } else header("location: ../index.php?p=data&a=upload_gagal");
    }
  
    if (isset($_POST['update'])) {
        $id=$_POST['id'];
        $judul=mysqli_real_escape_string($konek, $_POST['judul']);
        $pengarang=mysqli_real_escape_string($konek, $_POST['pengarang']);
        $penerbit=mysqli_real_escape_string($konek, $_POST['penerbit']);
        $harga=$_POST['harga'];
        $halaman=$_POST['halaman'];
        $kategori=$_POST['kategori'];
        $sinopsis=htmlspecialchars(mysqli_real_escape_string($konek, $_POST['sinopsis']));
        $stok=$_POST['stok'];
        $rating=$_POST['rating'];
        if(empty($_FILES['cover']['name'])){
            $form_data = array(
                'judul_buku' => $judul,
                'pengarang' => $pengarang,
                'penerbit' => $penerbit,
                'harga' => $harga,
                'halaman' => $halaman,
                'id_kategori' => $kategori,
                'sinopsis' => $sinopsis,
                'stok' => $stok,
                'rating' => $rating
            );
        } else {
            $cover = $_FILES["cover"]["name"];
            $tmp_cover = $_FILES["cover"]["tmp_name"];
            $target = "../../img/book/";
            $upload = upload_img($tmp_cover, $cover, $target);
            $form_data = array(
                'judul_buku' => $judul,
                'pengarang' => $pengarang,
                'penerbit' => $penerbit,
                'harga' => $harga,
                'halaman' => $halaman,
                'id_kategori' => $kategori,
                'sinopsis' => $sinopsis,
                'stok' => $stok,
                'cover' => $cover,
                'rating' => $rating
            );
            if ($upload==true) {
                $get_cover = mysqli_query($konek, "SELECT cover FROM tb_buku WHERE id_buku=$id");
                $row = mysqli_fetch_assoc($get_cover);
                $cover_url = "../../img/book/{$row['cover']}";
                unlink($cover_url);
            } else header("location: ../index.php?p=data&a=upload_gagal");
        }
        $query = update('tb_buku', $form_data, "WHERE id_buku=$id");
        $hasil = mysqli_query($konek, $query);
        if ($hasil)
            header('location: ../index.php?p=data&a=update_sukses');
        else
            header('location: ../index.php?p=data&a=update_gagal');        
    }

    if (isset($_POST['hapus'])) {
        $id=$_POST['id'];
        $cover = mysqli_query($konek, "SELECT cover FROM tb_buku WHERE id_buku=$id");
        $row = mysqli_fetch_assoc($cover);
        $url_cover = "../../img/book/{$row['cover']}";
        $hapus_gambar = unlink($url_cover);
        $query1 = delete('tb_buku', "WHERE id_buku=$id");
        $query2 = delete('tb_komentar', "WHERE id_buku=$id");
        $hasil1 = mysqli_query($konek, $query1);
        $hasil2 = mysqli_query($konek, $query2);
        if ($hasil1&&$hasil2&&$hapus_gambar){
            header('location: ../index.php?p=data&a=hapus_sukses');
        }
        else
            header('location: ../index.php?p=data&a=hapus_gagal');
    }

    if (isset($_POST['hapus_best'])) {
        $id = $_POST['id'];
        $form_data = array(
                'best' => 0
        );
        $query = update('tb_buku', $form_data, "WHERE id_buku=$id");
        $hasil = mysqli_query($konek, $query);
        if ($hasil)
            header('location: ../index.php?p=data&a=hapus_best_sukses');
        else
            header('location: ../index.php?p=data&a=hapus_best_gagal');
    }

    if (isset($_POST['tambah_best'])) {
        $id = $_POST['id'];
        $form_data = array(
                'best' => 1
        );
        $query = update('tb_buku', $form_data, "WHERE id_buku=$id");
        $hasil = mysqli_query($konek, $query);
        if ($hasil)
            header('location: ../index.php?p=data&a=tambah_best_sukses');
        else
            header('location: ../index.php?p=data&a=tambah_best_gagal');
    }

    if(isset($_POST['tambah_kat'])){
        $kategori=mysqli_real_escape_string($konek, $_POST['kategori']);
        $form_data = array(
            'judul_kategori' => $kategori
        );
        $query = insert('tb_kategori', $form_data);
        $hasil = mysqli_query($konek, $query);
        if ($hasil)
                header('location: ../index.php?p=kategori&a=insert_sukses');
            else
                header('location: ../index.php?p=kategori&a=insert_gagal');
    }

    if (isset($_POST['update_kat'])) {
        $id = $_POST['id'];
        $kategori = mysqli_real_escape_string($konek, $_POST['kategori']);
        $form_data = array(
                'judul_kategori' => $kategori
        );
        $query = update('tb_kategori', $form_data, "WHERE id_kategori=$id");
        $hasil = mysqli_query($konek, $query);
        if ($hasil)
            header('location: ../index.php?p=kategori&a=update_sukses');
        else
            header('location: ../index.php?p=kategori&a=update_gagal');
    }

    if (isset($_POST['hapus_kat'])) {
        $id=$_POST['id'];
        $cover = mysqli_query($konek, "SELECT cover FROM tb_buku WHERE id_kategori=$id");
        while($row = mysqli_fetch_assoc($cover)){
            $url_cover = "../../img/book/{$row['cover']}";
            $hapus_gambar = unlink($url_cover);
        }
        $query1 = delete('tb_buku', "WHERE id_kategori=$id");
        $query2 = delete('tb_kategori', "WHERE id_kategori=$id");
        $hasil1 = mysqli_query($konek, $query1);
        $hasil2 = mysqli_query($konek, $query2);
        if ($hasil1&&$hasil2){
            header('location: ../index.php?p=kategori&a=hapus_sukses');
        }
        else
            header('location: ../index.php?p=kategori&a=hapus_gagal');
    }

    if(isset($_POST['tambah_slider'])){
        $get_gambar = mysqli_query($konek, "SELECT id_slide FROM tb_slide");
        $get_urutan = mysqli_num_rows($get_gambar);
        $judul=mysqli_real_escape_string($konek, $_POST['judul']);
        $keterangan=mysqli_real_escape_string($konek, $_POST['keterangan']);
        $gambar = $_FILES["gambar"]["name"];
        $tmp_gambar = $_FILES["gambar"]["tmp_name"];
        $target = "../../img/slider/";
        $upload = upload_img($tmp_gambar, $gambar, $target);
        $form_data = array(
            'judul_slide' => $judul,
            'keterangan' => $keterangan,
            'gambar' => $gambar,
            'urutan' => $get_urutan+1
        );
        if ($upload==true) {
            $query = insert('tb_slide', $form_data);
            $hasil = mysqli_query($konek, $query);
            if ($hasil)
                header('location: ../index.php?p=slider&a=insert_sukses');
            else
                header('location: ../index.php?p=slider&a=insert_gagal');
        } else 
            echo "Gagal upload";
           
    }

    if (isset($_POST['hapus_slider'])) {
        $id=$_POST['id'];
        $gambar = mysqli_query($konek, "SELECT gambar FROM tb_slide WHERE id_slide=$id");
        $row = mysqli_fetch_assoc($gambar);
        $url_gambar = "../../img/slider/{$row['gambar']}";
        $hapus_gambar = unlink($url_gambar);
        $query = delete('tb_slide', "WHERE id_slide=$id");
        $hasil = mysqli_query($konek, $query);
        if ($hasil&&$hapus_gambar){
            header('location: ../index.php?p=slider&a=hapus_sukses');
        }
        else
            header('location: ../index.php?p=slider&a=hapus_gagal');
    }

    if (isset($_POST['update_slider'])) {
        $id=$_POST['id'];
        $judul=mysqli_real_escape_string($konek, $_POST['judul']);
        $keterangan=mysqli_real_escape_string($konek, $_POST['keterangan']);
        $urutan=$_POST['urutan'];
        $form_data = array(
                'judul_slide' => $judul,
                'keterangan' => $keterangan,
                'urutan' => $urutan
        );
        $query = update('tb_slide', $form_data, "WHERE id_slide=$id");
        $hasil = mysqli_query($konek, $query);
        if ($hasil)
            header('location: ../index.php?p=slider&a=update_sukses');
        else
            header('location: ../index.php?p=slider&a=update_gagal');
    }

    if (isset($_POST['restore_comment'])) {
        $id = $_POST['id'];
        $form_data = array(
                'hapus' => 0
        );
        $query = update('tb_komentar', $form_data, "WHERE id_komentar=$id");
        $hasil = mysqli_query($konek, $query);
        if ($hasil)
            header('location: ../index.php?p=comment&a=restore_sukses');
        else
            header('location: ../index.php?p=comment&a=restore_gagal');
    }

    if (isset($_POST['delete_comment'])) {
        $id = $_POST['id'];
        $form_data = array(
                'hapus' => 1
        );
        $query = update('tb_komentar', $form_data, "WHERE id_komentar=$id");
        $hasil = mysqli_query($konek, $query);
        if ($hasil)
            header('location: ../index.php?p=comment&a=hapus_sukses');
        else
            header('location: ../index.php?p=comment&a=hapus_gagal');
    }