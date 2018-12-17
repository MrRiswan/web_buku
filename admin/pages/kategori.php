<?php
    if(!defined('MyConst')){
        die('Akses langsung tidak diperbolehkan');
    }
    $kategori=mysqli_query($konek, "SELECT * FROM tb_kategori");
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
                            <strong>Insert Sukses!</strong> Penambahan data kategori baru berhasil.
                        </div>
                        <?php } else if($alert=='insert_gagal'){ ?>
                        <div role="alert" class="alert color red-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Insert Gagal!</strong> Penambahan data kategori baru gagal.
                        </div>
                        <?php } else if($alert=='update_sukses'){ ?>
                        <div role="alert" class="alert color green-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Update Sukses!</strong> Pembaharuan data kategori berhasil.
                        </div>
                        <?php } else if($alert=='hapus_sukses'){ ?>
                        <div role="alert" class="alert color blue-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Hapus sukses!</strong> Penghapusan data kategori berhasil.
                        </div>
                        <?php } } ?>
                    </div>
                    <div class="col-md-3 column">
                         <div class="heading-profile">
                              <h2>Data Kategori</h2>
                         </div>
                    </div>
               </div>
          </div>
          <ul class="breadcrumbs">
               <li><a href="#" title="">Beranda</a></li>
               <li>Data Kategori</li>
          </ul>
          <div class="main-content-area">
               <div class="row">
                    <div class="col-md-6">
                        <div class="widget">
                              <div class="widget-title">
                                   <h3>Data Kategori Buku</h3>
                                   <div class="widget-controls">
                                        <span class="expand-content"><i class="fa fa-expand"></i></span>
                                        <span class="refresh-content"><i class="fa fa-refresh"></i></span>
                                   </div><!-- Widget Controls -->
                              </div>
                              <div class="with-padding">                                          
                                <table class="table table-responsive table-bordered table-condensed table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Kategori</th>
                                            <th>Judul Kategori</th>
                                            <th>Operasi</th>
                                        </tr>
                                    </thead>    
                                    <tbody>
                                        <?php 
                                            $no=1;
                                            while ($row=mysqli_fetch_assoc($kategori)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $row['id_kategori'] ?></td>
                                            <td><?php echo $row['judul_kategori'] ?></td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target=".kategori" data-id='<?php echo $row['id_kategori'] ?>' data-kategori='<?php echo $row['judul_kategori'] ?>' 
                                                class="c-btn small blue-bg buzz edit_button"><i class="fa fa-pencil-square"></i></a>

                                                <a href="#" data-toggle="modal" data-target=".hapus" data-id='<?php echo $row['id_kategori'] ?>' data-kategori='<?php echo $row['judul_kategori'] ?>'
                                                class="c-btn small red-bg buzz delete_button"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                              </div>
                         </div>
                    </div>   
                    <div class="col-md-6">
                        <div class="widget">
                              <div class="widget-title">
                                   <h3>Tambah Kategori Buku</h3>
                                   <div class="widget-controls">
                                        <span class="expand-content"><i class="fa fa-expand"></i></span>
                                        <span class="refresh-content"><i class="fa fa-refresh"></i></span>
                                   </div><!-- Widget Controls -->
                              </div>
                              <div class="with-padding">                                          
                                <form action="lib/proses.php" method="post">
                                    <div class="form-group">
                                        <label for="kategori">Judul Kategori</label>
                                        <input type="text" name="kategori" placeholder="Masukkan judul kategori baru" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="c-btn large blue-bg" name="tambah_kat">Tambah</button>
                                        <button type="reset" class="c-btn large red-bg">Batal</button>
                                    </div>
                                </form>
                              </div>
                         </div>
                    </div>      
               </div>
          </div>
     </div>
     <div class="modal fade kategori" tabindex="-3" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Data Kategori</h4>
            </div>
            <div class="modal-body">
                <form action="lib/proses.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="form-group">
                            <label for="id">Kode Kategori</label>
                            <input type="text" id="id" name="id" class="form-control edit_id" readonly>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Judul Kategori</label>
                            <input type="text" id="kategori" name="kategori" class="form-control edit_kategori" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-4 col-md-offset-4">
                        <button type="submit" class="c-btn medium blue-bg" name="update_kat">Update</button>
                        <button type="button" class="c-btn medium red-bg" data-dismiss="modal">Batal</button>
                </div>
            </div>
            </form>            
            </div>
        </div>
     </div>

     <div class="modal fade hapus" tabindex="-3" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Hapus Data Kategori</h4>
            </div>
            <div class="modal-body">
                <form action="lib/proses.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="form-group">
                            <label for="id">Kode Kategori</label>
                            <input type="text" id="id" name="id" class="form-control hapus_id" readonly>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Judul Kategori</label>
                            <input type="text" id="kategori" name="kategori" class="form-control hapus_kategori" readonly>
                        </div>
                        <p>Apakah Anda yakin akan menghapus kategori dengan data seperti di atas?</p>
                        <div role="alert" class="alert white">
                            <span><i class="ti-trash red-bg"></i></span><strong>Perhatian!</strong> Menghapus kategori juga akan menghapus data buku dengan kategori terkait!
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-4 col-md-offset-4">
                        <button type="submit" class="c-btn medium blue-bg" name="hapus_kat">Hapus</button>
                        <button type="button" class="c-btn medium red-bg" data-dismiss="modal">Batal</button>
                </div>
            </div>
            </form>            
            </div>
        </div>
     </div>