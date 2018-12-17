<!-- Breadcrumbs -->
    <div class="container">
      <ol class="breadcrumb">
        <li>
          <a href="index.php">Beranda</a>
        </li>
        <li>
          <a href="?p=buku&halaman=1">Buku</a>
        </li>
        <li class="active">
          Koleksi Buku
        </li>
      </ol> 
    </div>


    <section class="section-wrap pt-70 pb-40 catalogue">
      <div class="container relative">
        <div class="row">

          <div class="col-md-9 catalogue-col right mb-50">

           

              <div class="row row-10">
              <?php
                $bukuAll = "SELECT id_buku FROM tb_buku";
                $rsBukuAll = mysqli_query($konek, $bukuAll);
                $halaman = 6;
                $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                if(isset($_GET['id_kat'])){
                    $id_kat = $_GET['id_kat'];
                    $result = mysqli_query($konek,"SELECT * FROM tb_buku WHERE id_kategori=$id_kat");
                } else 
                    $result = mysqli_query($konek,"SELECT * FROM tb_buku");
                $total = mysqli_num_rows($result);
                $pages = ceil($total/$halaman);
                if(isset($_GET['id_kat'])){
                    $buku = "SELECT id_buku, judul_buku, harga, cover FROM tb_buku WHERE id_kategori=$id_kat ORDER BY id_buku DESC LIMIT $mulai, $halaman";
                }
                else    
                    $buku = "SELECT id_buku, judul_buku, harga, cover FROM tb_buku ORDER BY id_buku DESC LIMIT $mulai, $halaman";
                $rs = mysqli_query($konek, $buku);
                $no =$mulai+1;
                $data = mysqli_num_rows($rs);
                if($data==0){
              ?>
              <div class="col-md-12 col-xs-12">
                    <div class="product-item text-center">
                        <h1>Maaf, data buku kategori terkait masih kosong!</h1>
                    </div>
              </div>
              <?php   
                } else {
                    while($row=mysqli_fetch_assoc($rs)){
              ?>
                    <div class="col-md-4 col-xs-12">
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
                            <a title="<?php $row['judul_buku']; ?>" class="product-title" href="?p=buku_detail&id_buku=<?php echo $row['id_buku']; ?>"><b><?php echo substr($row['judul_buku'], 0, 35); if(strlen($row['judul_buku'])>35) echo  "..." ?></b></a>
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
                <?php } } ?>
              </div> 
            <div class="clear"></div>
           
            <?php 
                if($data!=0){ 
            ?>
            <div class="pagination-wrap">           
              <nav class="pagination right clear">
                <?php if(isset($_GET['id_kat'])) { if($page == 1) echo ""; else {?>
                    <a href="?p=buku&id_kat=<?php echo $_GET['id_kat']; ?>&halaman=1"><i class="fa fa-angle-double-left"></i></a>
                    <a href="?p=buku&id_kat=<?php echo $_GET['id_kat']; ?>&halaman=<?php echo $_GET['halaman']-1; ?>"><i class="fa fa-angle-left"></i></a>
                <?php } } else { if($page == 1) echo ""; else {?>
                    <a href="?p=buku&halaman=1"><i class="fa fa-angle-double-left"></i></a>
                    <a href="?p=buku&halaman=<?php echo $_GET['halaman']-1; ?>"><i class="fa fa-angle-left"></i></a>
                <?php 
                    } }
                    if(isset($_GET['id_kat'])){ 
                        for ($i=1; $i<=$pages ; $i++){
                ?>
                    <a href="?p=buku&id_kat=<?php echo $_GET['id_kat']; ?>&halaman=<?php echo $i; ?>" class="<?php if($i==$page) echo 'page-numbers current'; ?>"><?php echo $i; ?></a>
                <?php } } else { 
                    for ($i=1; $i<=$pages ; $i++){
                ?>
                    <a href="?p=buku&halaman=<?php echo $i; ?>" class="<?php if($i==$page) echo 'page-numbers current'; ?>"><?php echo $i; ?></a>
                <?php } } ?>

                <?php if(isset($_GET['id_kat'])) { if($page == $pages) echo ""; else {?>
                    <a href="?p=buku&id_kat=<?php echo $_GET['id_kat']; ?>&halaman=<?php echo $_GET['halaman']+1; ?>"><i class="fa fa-angle-right"></i></a>
                    <a href="?p=buku&id_kat=<?php echo $_GET['id_kat']; ?>&halaman=<?php echo $pages; ?>"><i class="fa fa-angle-double-right"></i></a>
                <?php } } else { if($page == $pages) echo ""; else {?>
                    <a href="?p=buku&halaman=<?php echo $_GET['halaman']+1; ?>"><i class="fa fa-angle-right"></i></a>
                    <a href="?p=buku&halaman=<?php echo $pages; ?>"><i class="fa fa-angle-double-right"></i></a>
                <?php } } ?>
              </nav>
            </div>
            <?php } ?>

          </div>

          <aside class="col-md-3 sidebar left-sidebar">

            <div class="widget categories">
              <h3 class="widget-title uppercase">Kategori</h3>
              <ul class="list-no-dividers">
                <li class="<?php if(!isset($_GET['id_kat'])) echo "active-cat" ?>">
                        <a href="?p=buku&halaman=1">Semua Kategori <?php echo "(".mysqli_num_rows($rsBukuAll).")" ?></a>
                </li>
                <?php
                    $sideKat = "SELECT * FROM tb_kategori";
                    $rsSideKat = mysqli_query($konek, $sideKat);
                    while($row=mysqli_fetch_assoc($rsSideKat)){
                        if(isset($_GET['id_kat'])){
                            $id_kat = $_GET['id_kat'];
                            $active = "active-cat";
                        } else $active = "";
                        $sideKatPer = "SELECT id_buku FROM tb_buku WHERE id_kategori=".$row['id_kategori'];
                        $rsSideKatPer = mysqli_query($konek, $sideKatPer);
                ?>
                    <li class="<?php if($row['id_kategori']==$id_kat) echo $active ?>">
                        <a href="?p=buku&id_kat=<?php echo $row['id_kategori'] ?>&halaman=1"><?php echo $row['judul_kategori']." (".mysqli_num_rows($rsSideKatPer).")"; ?></a>
                    </li>
                <?php } ?>
              </ul>
            </div>
            
            <div class="widget bestsellers">
              <div class="products-widget">
                <h3 class="widget-title uppercase">Best Sellers</h3>
                <?php
                    $best = "SELECT id_buku, judul_buku, harga, cover FROM tb_buku WHERE best='1' ORDER BY id_buku DESC LIMIT 2";
                    $rsBest = mysqli_query($konek, $best);
                    while($row=mysqli_fetch_assoc($rsBest)){
                ?>
                    <ul class="product-list-widget">
                    <li class="clearfix">
                        <a href="?p=buku_detail&id_buku=<?php echo $row['id_buku']; ?>">
                        <img src="img/book/<?php echo $row['cover']; ?>" alt="">
                        <span class="product-title"><?php echo $row['judul_buku']; ?></span>
                        </a>
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
                    </li>               
                    </ul>
                    <br>
                <?php } ?>
              </div>
            </div>
          </aside> 

        </div> 
      </div> 
    </section> 