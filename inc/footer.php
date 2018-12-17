<?php 
  $katfoot="SELECT * FROM tb_kategori ORDER BY judul_kategori LIMIT 6";
  $rsKatFoot=mysqli_query($konek, $katfoot);
?>

    <footer class="footer footer-type-1 bg-dark">
      <div class="container">
        <div class="footer-widgets top-bottom-dividers pb-mdm-20">
          <div class="row">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-4 col-xxs-12">
              <div class="widget footer-links">
                <h5 class="widget-title uppercase">Kategori Buku</h5>
                <ul class="list-no-dividers">
                  <?php while($row=mysqli_fetch_assoc($rsKatFoot)){ ?>
                    <li><a href="?p=buku&id_kat=<?php echo $row['id_kategori']; ?>&halaman=1"><?php echo $row['judul_kategori']; ?></a></li>
                  <?php } ?>
                  <li>.........</li>
                </ul>
              </div>
            </div>              

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h5 class="widget-title uppercase">tentang kami</h5>
                <p class="mb-0">
                    RISWAN PROJECT menjual berbagai macam kategori buku dari komik hingga novel fiksi, serta buku ilmiah lain dengan harga yang bersaing dan kualitas terjamin.
                </p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget footer-get-in-touch">
                <h5 class="widget-title uppercase">Kontak</h5>
                <address class="footer-address"><span>Alamat:</span> klaytan g, 3. g. mawar Jawa Timur</address>
                <p>No. HP: <a href="tel:+6287739211471">+6282251157287</a></p>
                <p>Email: <a href="mailto:iwanriswan187@gmail.com">iwanriswan187@gmail.com</a></p>
                <div class="social-icons rounded mt-20">
                  <a href="https://facebook.com/Riswan" target="_blank"><i class="fa fa-facebook"></i></a>
                  <a href="https://instagram.com/iwanriswn97" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>         

          </div>
        </div>    
      </div> 

      <div class="bottom-footer bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 copyright sm-text-center">
              <span>
               RISWAN PROJEK 2018 TEKNIK INFORMATIKA
              </span>
            </div>

            <div class="col-sm-4 text-center">
              <div id="back-to-top">
                <a href="#top">
                  <i class="fa fa-angle-up"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </footer> 