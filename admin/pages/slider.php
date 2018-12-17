<?php 
    if(!defined('MyConst')){
        die('Akses langsung tidak diperbolehkan');
    }
    $slider=mysqli_query($konek, "SELECT * FROM tb_slide ORDER BY id_slide DESC");
?>
<div class="panel-content">
          <div class="main-title-sec">
               <div class="row">
                   <div class="col-md-12 column">
                       <?php
                        if(isset($_GET['a'])){
                            $alert=$_GET['a'];
                            if($alert=='insert_sukses'){
                        ?>
                        <div role="alert" class="alert color green-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Insert Sukses!</strong> Penambahan data slider baru berhasil.
                        </div>
                        <?php } else if($alert=='insert_gagal'){ ?>
                        <div role="alert" class="alert color red-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Insert Gagal!</strong> Penambahan data slider baru gagal.
                        </div>
                        <?php } else if($alert=='upload_gagal'){ ?>
                        <div role="alert" class="alert color red-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Upload Gagal!</strong> Penambahan data slider baru gagal.
                        </div>
                        <?php } else if($alert=='update_sukses'){ ?>
                        <div role="alert" class="alert color green-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Update Sukses!</strong> Pembaharuan data slider berhasil.
                        </div>
                        <?php } else if($alert=='hapus_sukses'){ ?>
                        <div role="alert" class="alert color blue-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Hapus sukses!</strong> Penghapusan slider berhasil.
                        </div>
                        <?php } } ?>
                    </div>
                    <div class="col-md-3 column">
                         <div class="heading-profile">
                              <h2>Setting Slider</h2>
                         </div>
                    </div>
               </div>
          </div>
          <ul class="breadcrumbs">
               <li><a href="#" title="">Beranda</a></li>
               <li>Setting Slider</li>
          </ul>
          <div class="main-content-area">
              <div class="row">
                  <div class="col-md-12">
                      &nbsp;
                  </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <a href="#" data-toggle="modal" data-target=".tambah" class="icon-btn pulse-grow"><i class="fa fa-plus-square blue-bg"></i> Tambah Slider</a>
                </div>
              </div>
               <div class="row">
                    <div class="col-md-12">
                              <div id="wrapper2">                                           
                                   <table id="keywords" cellspacing="0" cellpadding="0" class="table table-condensed table-hover table-responsive table-striped table-bordered">
                                        <thead>
                                          <tr>
                                             <th width="10"><span>No</span></th>
                                             <th><span>Judul</span></th>
                                             <th><span>Keterangan</span></th>
                                             <th><span>Gambar</span></th>
                                             <th><span>Urutan</span></th>
                                             <th><span>Operasi</span></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $no=1;
                                            while ($row=mysqli_fetch_assoc($slider)) {
                                        ?>
                                          <tr>
                                             <td><?php echo $no; ?></td>
                                             <td><?php echo $row['judul_slide']; ?></td>
                                             <td><?php echo $row['keterangan']; ?></td>
                                             <td>
                                                 <a data-fancybox="gallery" href="../img/slider/<?php echo $row['gambar']; ?>">
                                                    <img src="../img/slider/<?php echo $row['gambar']; ?>" class="img-thumbnail img-responsive" alt="img" style="width:100px;">
                                                </a>
                                            </td>
                                             <td><?php echo $row['urutan']; ?></td>
                                             <td>
                                                 <a href="#" data-toggle="modal" data-target=".edit" data-id='<?php echo $row['id_slide']; ?>' data-judul='<?php echo $row['judul_slide']; ?>'
                                                 data-keterangan="<?php echo $row['keterangan']; ?>" data-urutan='<?php echo $row['urutan']; ?>'
                                                 class="c-btn small blue-bg buzz edit_button"><i class="fa fa-pencil-square"></i></a>

                                                <a href="#" data-toggle="modal" data-target=".hapus" data-id='<?php echo $row['id_slide']; ?>' data-judul='<?php echo $row['judul_slide']; ?>'
                                                 data-urutan='<?php echo $row['urutan']; ?>'
                                                 class="c-btn small red-bg buzz delete_button"><i class="fa fa-trash"></i></a>
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
     <div class="modal fade tambah" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Slider</h4>
            </div>
            <div class="modal-body">
                <form action="lib/proses.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="form-group">
                            <label for="judul">Judul Slider</label>
                            <input type="text" id="judul" name="judul" class="form-control" placeholder="Masukkan judul slider" required>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea rows="5" cols="10" name="keterangan" class="form-control" placeholder="keterangan slider" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar Slider</label>
                            <input type="file" id="gambar" name="gambar" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-4 col-md-offset-4">
                        <button type="submit" class="c-btn medium blue-bg" name="tambah_slider">Tambah</button>
                        <button type="button" class="c-btn medium red-bg" data-dismiss="modal">Batal</button>
                </div>
            </div>
            </form>            
            </div>
        </div>
     </div>

     <div class="modal fade edit" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Slider</h4>
            </div>
            <div class="modal-body">
                <form action="lib/proses.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="form-group">
                            <label for="id">ID Slider</label>
                            <input type="text" id="id" name="id" class="form-control edit_id" readonly>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul Slider</label>
                            <input type="text" id="judul" name="judul" class="form-control edit_judul" required>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea rows="5" cols="10" name="keterangan" class="form-control edit_keterangan" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="urutan">Urutan Slider</label>
                            <input type="number" id="urutan" name="urutan" class="form-control edit_urutan" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-4 col-md-offset-4">
                        <button type="submit" class="c-btn medium blue-bg" name="update_slider">Update</button>
                        <button type="button" class="c-btn medium red-bg" data-dismiss="modal">Batal</button>
                </div>
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
                <h4 class="modal-title">Hapus Slider</h4>
            </div>
            <div class="modal-body">
                <form action="lib/proses.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="form-group">
                            <label for="id">ID Slider</label>
                            <input type="text" id="id" name="id" class="form-control hapus_id" readonly>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul Slider</label>
                            <input type="text" id="judul" name="judul" class="form-control hapus_judul" readonly>
                        </div>
                        <div class="form-group">
                            <label for="urutan">Urutan Slider</label>
                            <input type="number" id="urutan" name="urutan" class="form-control hapus_urutan" readonly>
                        </div>
                        <p>Apakah Anda yakin akan menghapus slider dengan data seperti di atas?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-4 col-md-offset-4">
                        <button type="submit" class="c-btn medium blue-bg" name="hapus_slider">Hapus</button>
                        <button type="button" class="c-btn medium red-bg" data-dismiss="modal">Batal</button>
                </div>
            </div>
            </form>            
            </div>
        </div>
     </div>