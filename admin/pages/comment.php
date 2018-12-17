<?php
    if(!defined('MyConst')){
        die('Akses langsung tidak diperbolehkan');
    }
    $komentar=mysqli_query($konek, "SELECT komen.*, buku.judul_buku FROM tb_komentar komen INNER JOIN tb_buku buku ON komen.id_buku=buku.id_buku WHERE komen.hapus=0 ORDER BY komen.id_komentar DESC");
    $deleted=mysqli_query($konek, "SELECT komen.*, buku.judul_buku FROM tb_komentar komen INNER JOIN tb_buku buku ON komen.id_buku=buku.id_buku WHERE komen.hapus=1 ORDER BY komen.id_komentar DESC");
?>
<div class="panel-content">
          <div class="main-title-sec">
               <div class="row">
                   <div class="col-md-12 column">
                       <?php
                        if(isset($_GET['a'])){
                            $alert=$_GET['a'];
                            if($alert=='hapus_sukses'){
                        ?>
                        <div role="alert" class="alert color green-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Hapus Sukses!</strong> Penghapusan data komentar berhasil.
                        </div>
                        <?php } else if($alert=='hapus_gagal'){ ?>
                        <div role="alert" class="alert color red-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Hapus Gagal!</strong> Penghapusan data komentar gagal.
                        </div>
                        <?php } else if($alert=='restore_sukses'){ ?>
                        <div role="alert" class="alert color green-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Restore Sukses!</strong> Restore komentar terhapus berhasil.
                        </div>
                        <?php } else if($alert=='restore_gagal'){ ?>
                        <div role="alert" class="alert color red-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Restore Gagal!</strong> Restore komentar terhapus gagal.
                        </div>
                        <?php } } ?>
                    </div>
                    <div class="col-md-3 column">
                         <div class="heading-profile">
                              <h2>Data Komentar</h2>
                         </div>
                    </div>
               </div>
          </div>
          <ul class="breadcrumbs">
               <li><a href="#" title="">Beranda</a></li>
               <li>Data Komentar</li>
          </ul>
          <div class="main-content-area">
              <div class="row">
                  <div class="streaming-table">
                    <a href="#" data-toggle="modal" data-target=".deleted" class="icon-btn pulse-grow"><i class="fa fa-trash red-bg"></i> Komentar terhapus</a>
                  </div>
              </div>
               <div class="row">
                    <div class="col-md-12">
                         <div class="streaming-table">
                                   <span id="found" class="label label-info"></span>
                                   <table id="komentar" class='table table-responsive table-responsive table-striped table-hover'>
                                     <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>Nama</th>
                                          <th>Komentar</th>
                                          <th>Pada buku</th>
                                          <th>Tanggal post</th>
                                          <th>Hapus Komentar</th>
                                        </tr>
                                     </thead>
                                     <tbody>
                                        <?php
                                            $no = 1;
                                            while($row=mysqli_fetch_assoc($komentar)){
                                        ?>
                                         <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td>
                                                <?php
                                                    $text = $row['isi_komentar'];
                                                    $strip = strip_tags(stripcslashes($text), '<a>');
                                                    
                                                ?>
                                                <div role="alert" class="alert color skyblue-bg">
                                                    <?php
                                                        echo substr($strip, 0, 80);
                                                        if(strlen(trim($strip))>80) echo " [...]";
                                                    ?>
                                                </div>
                                            </td>
                                            <td><?php echo $row['judul_buku']; ?></td>
                                            <td><?php echo $row['tgl']; ?></td>
                                            <td>
                                                <a href="" data-toggle="modal" data-target=".hapus" data-id='<?php echo $row['id_komentar']; ?>' data-nama='<?php echo $row['nama']; ?>'
                                                data-komentar='<?php echo $strip; ?>' data-judul='<?php echo $row['judul_buku']; ?>' class="c-btn small red-bg buzz delete_button"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                         <?php $no++; } ?>
                                     </tbody>
                                   </table>
                                </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="modal fade deleted" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Komentar Terhapus</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                         <div class="streaming-table">
                                   <span id="found" class="label label-info"></span>
                                   <table id="komentar_deleted" class='table table-responsive table-responsive table-striped table-hover'>
                                     <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>Nama</th>
                                          <th>Komentar</th>
                                          <th>Pada buku</th>
                                          <th>Tanggal post</th>
                                          <th>Restore Komentar</th>
                                        </tr>
                                     </thead>
                                     <tbody>
                                        <?php
                                            $no = 1;
                                            while($row=mysqli_fetch_assoc($deleted)){
                                        ?>
                                         <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td>
                                                <?php
                                                    $text = $row['isi_komentar'];
                                                    $strip = strip_tags(stripcslashes($text), '<a>');
                                                    
                                                ?>
                                                <div role="alert" class="alert color red-bg">
                                                    <?php
                                                        echo substr($strip, 0, 80);
                                                        if(strlen(trim($strip))>80) echo " [...]";
                                                    ?>
                                                </div>
                                            </td>
                                            <td><?php echo $row['judul_buku']; ?></td>
                                            <td><?php echo $row['tgl']; ?></td>
                                            <td>
                                                <form action="lib/proses.php" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $row['id_komentar']; ?>">
                                                    <button type="submit" name="restore_comment" class="c-btn small blue-bg buzz"><i class="fa fa-reply"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                         <?php $no++; } ?>
                                     </tbody>
                                   </table>
                                </div>
                              </div>
                         </div>
                    </div>
               </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="c-btn medium red-bg" data-dismiss="modal">Tutup</button>
            </div>
            </form>
            </div>
        </div>
     </div>

     <div class="modal fade hapus" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Hapus Komentar</h4>
            </div>
            <div class="modal-body">
                <form action="lib/proses.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="form-group">
                            <label for="id">ID Komentar</label>
                            <input type="text" id="id" name="id" class="form-control hapus_id" readonly>
                        </div>
                        <div class="form-group">
                            <label for="komentar">Isi Komentar</label>
                            <textarea rows="5" cols="10" id="komentar" name="komentar" class="form-control hapus_komentar" readonly></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nama">Oleh</label>
                            <input type="text" id="nama" name="nama" class="form-control hapus_nama" readonly>
                        </div>
                        <div class="form-group">
                            <label for="judul">Pada Buku</label>
                            <input type="text" id="judul" name="judul" class="form-control hapus_judul" readonly>
                        </div>
                        <p>Apakah Anda yakin akan menghapus komentar dengan data seperti di atas?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-4 col-md-offset-4">
                        <button type="submit" class="c-btn medium blue-bg" name="delete_comment">Hapus</button>
                        <button type="button" class="c-btn medium red-bg" data-dismiss="modal">Batal</button>
                </div>
            </div>
            </form>
            </div>
        </div>
     </div>
