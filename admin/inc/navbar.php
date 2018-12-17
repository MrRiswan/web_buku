
<?php 
      $buku=mysqli_query($konek, "SELECT id_buku FROM tb_buku");
      $kategori=mysqli_query($konek, "SELECT id_kategori FROM tb_kategori");
?>
<header class="simple-normal">
     <div class="top-bar">
          <div class="logo">
               <a href="index.php" title=""><i class="fa fa-bullseye"></i> RISWAN PROJECT</a>
          </div>
          
          <div class="menu-options"><span class="menu-action"><i></i></span></div>
          <div class="top-bar-quick-sec">
               <a href="#" data-toggle="modal" data-target=".logout"><span class="full-screen-btn"><i class="fa fa-sign-out"></i></span></a>
               <span id="toolFullScreen" class="full-screen-btn"><i class="fa fa-arrows-alt fa-spin"></i></span>
          </div>
     </div>
     <div class="side-menu-sec" id="header-scroll">
         <br>
          <div class="side-menus">
               <span>MENU UTAMA</span>
               <nav>
                    <ul class="parent-menu">
                         <li class="<?php if(!isset($_GET['p'])) echo 'active'; ?>">
                              
                              <a title="Halaman Utama" href="index.php"><i class="ti-desktop"></i><span>Dashboard</span></a>
                         </li>
                         <li class="menu-item-has-children <?php if(isset($_GET['p'])) if($_GET['p']=='buku'||$_GET['p']=='data'||$_GET['p']=='kategori') echo 'active'; ?>">
                              <a title="Area administrasi buku"><i class="ti-book"></i><span>Book Area</span></a>
                              <ul <?php if(isset($_GET['p'])) if($_GET['p']=='buku'||$_GET['p']=='data'||$_GET['p']=='kategori') { ?> style="display: block;" <?php } ?>>
                                   <li><a href="?p=data">Data Buku <i class="badge red-bg"><?php echo mysqli_num_rows($buku); ?></i></a></li>
                                   <li><a href="?p=kategori">Kategori Buku <i class="badge blue-bg"><?php echo mysqli_num_rows($kategori); ?></i></a></li>
                              </ul>
                        </li>
                        <li class="<?php if(isset($_GET['p'])) if($_GET['p']=='slider') echo 'active'; ?>">
                              <a title="Setting Slider" href="?p=slider"><i class="ti-layout-slider"></i><span>Setting Slider Web</span></a>
                        </li>
                        <li class="<?php if(isset($_GET['p'])) if($_GET['p']=='comment') echo 'active'; ?>">
                              <a title="Pantau Komentar" href="?p=comment"><i class="ti-comments"></i><span>Comments Monitor</span></a>
                        </li>
                        <li class="">
                              <a title="Keluar dari Halaman Admin" href="#logout" data-toggle="modal" data-target=".logout"><i class="ti-export"></i><span>Log Out</span></a>
                        </li>
                    </ul>
               </nav>
                <span class="footer-line">
               RISWAN PROJEK 2018 TEKNIK INFORMATIKA</span>
          </div>
     </div>
</header>