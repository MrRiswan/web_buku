<?php
    $slider = "SELECT * FROM tb_slide ORDER BY urutan";
    $result = mysqli_query($konek, $slider);
?>
    <section class="section-wrap nopadding">
      <div class="container">
        <div class="entry-slider">
          <div class="flexslider" id="flexslider-hero">
            <ul class="slides clearfix">
            <?php
                $i=1; 
                while($row=mysqli_fetch_assoc($result)){ 
            ?>
              <li>
                <img src="img/slider/<?php echo $row['gambar']; ?>" alt="" style="height:536px; width:100%">
                <div class="img-holder img-<?php echo $row['gambar']; ?>"></div>
                <div class="hero-holder text-center right-align">
                  <div class="hero-lines">
                    <h1 class="hero-heading white"><?php echo $row['judul_slide']; ?></h1>
                    <h4 class="hero-subheading white uppercase"><?php echo $row['keterangan']; ?></h4>
                  </div>
                </div>
              </li>
            <?php $i++; } ?>
            </ul>
          </div>
        </div> 
      </div>
    </section> 