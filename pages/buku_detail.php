<?php
    $id_buku = $_GET['id_buku'];
    $queryProduct = "SELECT buku.*, kat.judul_kategori FROM tb_buku buku
                     INNER JOIN tb_kategori kat ON buku.id_kategori = kat.id_kategori
                     WHERE buku.id_buku=$id_buku";
    $rsProduct = mysqli_query($konek, $queryProduct);
    $row = mysqli_fetch_assoc($rsProduct);
    $queryKomentar = "SELECT * FROM tb_komentar WHERE id_buku=$id_buku ORDER BY id_komentar DESC";
    $rsKomentar = mysqli_query($konek, $queryKomentar);
?>
    <div class="container">
      <ol class="breadcrumb">
        <li>
          <a href="index.php">Beranda</a>
        </li>
        <li>
          <a href="?p=buku&halaman=1">Buku</a>
        </li>
        <li class="active">
          <?php echo $row['judul_buku']; ?>
        </li>
      </ol>
    </div>

    <section class="section-wrap single-product">
      <div class="container relative">
        <div class="row">
        <?php 
            if(isset($_GET['a'])){ 
                $alert = $_GET['a'];
                if ($alert=='komentar_sukses'){
        ?>
        <div class="col-sm-12 col-xs-12">
            <div class="alert alert-success fade in alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>Sukses!</strong> Komentar Anda telah ditambahkan
            </div>
        </div>
            <?php } else { ?>
        <div class="col-sm-12 col-xs-12">
            <div class="alert alert-danger fade in alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>Gagal!</strong> Komentar Anda gagal ditambahkan
            </div>
        </div>
        <?php } } ?>

          <div class="col-sm-6 col-xs-12 mb-60">

            <div class="flickity  mfp-hover" id="gallery-main">

              <div class="gallery-cell">
                <a href="img/book/<?php echo $row['cover']; ?>" class="lightbox-img">
                  <img src="img/book/<?php echo $row['cover']; ?>" alt="" />
                </a>
              </div>
              
            </div> 

          </div> 

          <div class="col-sm-6 col-xs-12 product-description-wrap">
            <h1 class="product-title"><?php echo $row['judul_buku']; ?></h1>
            <span>
            <?php 
                $x = $row['rating'];
                $j = 5-$x;
                for ($i=0; $i<$x ; $i++) {
            ?>
              <span class="icon_star" style="color:#f39c12;"></span>
            <?php } for ($i=0; $i<$j ; $i++) { ?>
              <span class="icon_star_alt" style="color:#f39c12;"></span>
            <?php } ?>
            </span>
            <span class="price">
              <ins>
                <span class="ammount text-danger">
                    <?php
                        $harga = number_format($row['harga'], 2, ",", ".");
                        echo "Rp ".$harga;
                    ?>
                </span>
              </ins>
            </span>
            

            <div class="product_meta">
                <table class="table table-hover table-responsive">
                    <tr>
                        <td width="5px"><span class="icon_book"></span></td>
                        <td><span class="sku">Pengarang</td>
                        <td><?php echo $row['pengarang']; ?></span></td>
                    </tr>
                    <tr>
                        <td width="5px"><span class="icon_printer-alt"></span></td>
                        <td><span class="posted_in">Penerbit</td>
                        <td><?php echo $row['penerbit']; ?></span></td>
                    </tr>
                    <tr>
                        <td width="5px"><span class="icon_documents"></span></td>
                        <td><span class="tagged_as">Jumlah Halaman</td>
                        <td><?php echo $row['halaman']; ?> Halaman</span></td>
                    </tr>
                    <tr>
                        <td width="5px"><span class="icon_folder-open"></span></td>
                        <td><span class="tagged_as">Stok</td>
                        <td><?php echo $row['stok']; ?></span></td>
                    </tr>
                    <tr>
                        <td width="5px"><span class="icon_tags"></span></td>
                        <td><span class="posted_in">Kategori</td>
                        <td><a href="?p=buku&id_kat=<?php echo $row['id_kategori'] ?>&halaman=1" target="_blank">
                            <?php echo $row['judul_kategori']; ?></a></span></td>
                    </tr>
                </table>
                <!-- tabs -->
                <div class="row">
                <div class="col-md-12">
                    <div class="tabs tabs-bb">
                    <ul class="nav nav-tabs">                                 
                        <li class="active">
                        <a href="#tab-description" data-toggle="tab">Sinopsis</a>
                        </li>                                 
                        <li>
                        <a href="#tab-info" data-toggle="tab">Kirim Komentar</a>
                        </li>                                 
                        <li>
                        <a href="#tab-reviews" data-toggle="tab">Komentar</a>
                        </li>                                 
                    </ul> 
                    
                  
                    <div class="tab-content">
                        
                        <div class="tab-pane fade in active" id="tab-description">
                        <p align="justify">
                            <?php echo htmlspecialchars_decode(stripcslashes($row['sinopsis'])); ?>
                        </p>
                        </div>
                        
                        <div class="tab-pane fade" id="tab-info">
                            <div class="col-md-12">
                                <form action="lib/proses.php" name="komentar" method="post">
                                    <input name="id_buku" type="hidden" value="<?php echo $_GET['id_buku']; ?>">
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input class="form-control" name="nama" id="nama" type="text" placeholder="Masukkan nama lengkap Anda" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="isi">Isi Komentar</label>
                                        <textarea rows="3" cols="5" name="isi" id="isi"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-md" name="komentar">Kirim Komentar</button>
                                </form>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="tab-reviews">

                        <div class="reviews">
                            <ul class="reviews-list">
                            <?php if(mysqli_num_rows($rsKomentar)==0) { ?>
                                <div class="review-body">
                                <div class="review-content">
                                    <h3 class="text-center">Belum ada komentar pada buku ini</h3>
                                </div>
                                </div>
                            <?php 
                                } else { 
                                    while($row=mysqli_fetch_assoc($rsKomentar)){ 
                            ?>
                            <li>
                                <div class="review-body">
                                <div class="review-content">
                                    <p class="review-author"><strong><?php echo $row['nama']; ?></strong><small> - <?php echo $row['tgl']; ?></small></p>
                                    <p align="justify">
                                        <?php
                                            if($row['hapus']==0) 
                                                echo $row['isi_komentar'];
                                            else
                                                echo "<i>Komentar telah dihapus oleh Admin</i>"; 
                                        ?>
                                    </p>
                                </div>
                                </div>
                            </li>
                            <br><hr><br>
                            <?php } } ?>
                            </ul>         
                        </div> 
                        </div>
                        
                    </div> 

                    </div>
                </div> 
                </div> 
            </div>

          </div> 
        </div>


        
      </div> 
    </section>