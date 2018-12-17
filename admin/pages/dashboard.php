<?php
    if(!defined('MyConst')){
            die('Akses langsung tidak diperbolehkan');
        }
    $buku=mysqli_query($konek, "SELECT id_buku FROM tb_buku");
    $kategori=mysqli_query($konek, "SELECT id_kategori FROM tb_kategori");
    $komentar=mysqli_query($konek, "SELECT id_komentar FROM tb_komentar WHERE hapus=0");
    $slide=mysqli_query($konek, "SELECT id_slide FROM tb_slide");
    $stok_buku=mysqli_query($konek, "SELECT SUM(stok) FROM tb_buku");
    $stok = mysqli_fetch_row($stok_buku);
?>
<div class="panel-content">
        <div class="main-title-sec">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        if(isset($_GET['a'])){
                            $alert=$_GET['a'];
                            if($alert=='sukses_login'){
                    ?>
                    <div role="alert" class="alert color green-bg fade in alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Berhasil login!</strong> selamat, Anda berhasil login sebagai administrator Zurin Bookstore.
                    </div>
                    <?php } } ?>
                </div>
                <div class="col-md-3 column">
                    <div class="heading-profile">
                        <h2>Dashboard</h2>
                        <span>Selamat datang, <?php echo $_SESSION['nama']; ?></span>
                    </div>
                </div>
                
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href="#" title="">Beranda</a></li>
            <li><a href="index.php" title="">Dashboard</a></li>
        </ul>
        <div class="main-content-area">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span>Buku</span>
                            <h4>
                                <?php echo mysqli_num_rows($buku); ?>
                            </h4>
                            <i class="fa fa-book red-bg"></i>
                            <h5>Total Stok Buku : <?php echo $stok[0]; ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span>Kategori</span>
                            <h4>
                                <?php echo mysqli_num_rows($kategori); ?>
                            </h4>
                            <i class="fa fa-tags skyblue-bg"></i>
                            <h5>Total Kategori : <?php echo mysqli_num_rows($kategori); ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span>Komentar</span>
                            <h4>
                                <?php echo mysqli_num_rows($komentar); ?>
                            </h4>
                            <i class="fa fa-comments green-bg"></i>
                            <h5>Total Komentar : <?php echo mysqli_num_rows($komentar); ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span>Slider</span>
                            <h4 class="number">
                                <?php echo mysqli_num_rows($slide); ?>
                            </h4>
                            <i class="fa fa-area-chart blue-bg"></i>
                            <h5>Total Slider pada Halaman Web : <?php echo mysqli_num_rows($slide); ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>