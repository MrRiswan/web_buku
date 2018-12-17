<?php 
  if(!isset($_GET['cari'])){ 
    include "inc/slider.php";
    $new = "SELECT id_buku, judul_buku, harga, cover FROM tb_buku ORDER BY id_buku DESC LIMIT 4";
    $best = "SELECT id_buku, judul_buku, harga, cover FROM tb_buku WHERE best='1' ORDER BY id_buku DESC LIMIT 4";
    $rsNew = mysqli_query($konek, $new);
    $rsBest = mysqli_query($konek, $best);
?>

    <section class="section-wrap new-arrivals pb-40">
      <div class="container">

        <div class="row heading-row">
          <div class="col-md-12 text-center">
            <h2 class="heading uppercase"><small>Rilis Baru</small></h2>
          </div>
        </div>

        <div class="row row-10">              
          <?php while($row=mysqli_fetch_assoc($rsNew)){ ?>
            <div class="col-md-3 col-xs-12 animated-from-left">
              <div class="product-item">
                <div class="product-img">
                  <a href="#">
                    <img src="img/book/<?php echo $row['cover']; ?>" alt="" style="height:347px; width:277px;">
                    <img src="img/book/<?php echo $row['cover']; ?>" alt="" class="back-img">
                  </a>
                  <a href="?p=buku_detail&id_buku=<?php echo $row['id_buku']; ?>" class="product-quickview">Lihat Selengkapnya</a>
                </div>
                <div class="product-details">
                  <h3>
                    <a class="product-title" href="?p=buku_detail&id_buku=<?php echo $row['id_buku']; ?>"><b><?php echo substr($row['judul_buku'], 0, 35); if(strlen($row['judul_buku'])>35) echo  "..." ?></b></a>
                  </h3>
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
                </div>
              </div>
            </div>     
          <?php } ?>
        </div> 
      </div>
    </section> 
    <section class="section-wrap pb-0">
      <div class="container">

        <div class="row heading-row">
          <div class="col-md-12 text-center">
            <h2 class="heading uppercase"><small>Best Sellers</small></h2>
          </div>
        </div>

        <div class="row row-10">              

          <?php while($row=mysqli_fetch_assoc($rsBest)){ ?>
            <div class="col-md-3 col-xs-12 animated-from-left">
              <div class="product-item">
                <div class="product-img">
                  <a href="#">
                    <img src="img/book/<?php echo $row['cover']; ?>" alt="" style="height:347px; width:277px;">
                    <img src="img/book/<?php echo $row['cover']; ?>" alt="" class="back-img">
                  </a>
                  <a href="?p=buku_detail&id_buku=<?php echo $row['id_buku']; ?>" class="product-quickview">Lihat Selengkapnya</a>
                </div>
                <div class="product-details">
                  <h3>
                    <a class="product-title" href="?p=buku_detail&id_buku=<?php echo $row['id_buku']; ?>"><b><?php echo $row['judul_buku']; ?></b></a>
                  </h3>
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
                </div>
              </div>
            </div>     
          <?php } ?>     

        </div> 
      </div>
    </section> 
  <?php } else { 
    $key=$_GET['judul'];
    $queryCari = "SELECT id_buku, judul_buku, harga, cover FROM tb_buku WHERE judul_buku like '%$key%' ORDER BY id_buku DESC";
    $rsCari = mysqli_query($konek, $queryCari);
  ?>
    <section class="section-wrap new-arrivals pb-40">
      <div class="container">

        <div class="row heading-row">
          <div class="col-md-12 text-center">
            <h2 class="heading uppercase"><small>Hasil Pencarian</small></h2>
          </div>
        </div>

        <div class="row row-10">              
          <?php while($row=mysqli_fetch_assoc($rsCari)){ ?>
            <div class="col-md-3 col-xs-12 animated-from-left">
              <div class="product-item">
                <div class="product-img">
                  <a href="#">
                    <img src="img/book/<?php echo $row['cover']; ?>" alt="" style="height:347px; width:277px;">
                    <img src="img/book/<?php echo $row['cover']; ?>" alt="" class="back-img">
                  </a>
                  <a href="?p=buku_detail&id_buku=<?php echo $row['id_buku']; ?>" class="product-quickview">Lihat Selengkapnya</a>
                </div>
                <div class="product-details">
                  <h3>
                    <a class="product-title" href="?p=buku_detail&id_buku=<?php echo $row['id_buku']; ?>"><b><?php echo substr($row['judul_buku'], 0, 35); if(strlen($row['judul_buku'])>35) echo  "..." ?></b></a>
                  </h3>
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
                </div>
              </div>
            </div>     
          <?php } ?>
        </div> <!-- end row -->
      </div>
    </section>
  <?php } ?>            
