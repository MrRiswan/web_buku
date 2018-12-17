<!DOCTYPE html>
<html class="no-js"> 
<head>

        <title>RISWAN PROJECT | Login Admin</title>
    <meta charset="utf-8">
    <meta name="description" content="Glade is a clean and powerful ready to use responsive AngularJs Admin Template based on Latest Bootstrap version and powered by jQuery, Glade comes with 3 amazing Dashboard layouts. Glade is completely flexible and user friendly admin template as it supports all the browsers and looks awesome on any device.">
    <meta name="keywords" content="admin, admin dashboard, angular admin, bootstrap admin, dashboard, modern admin, responsive admin, web admin, web app, bitlers">
    <meta name="author" content="bitlers">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">


    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="apple-touch-icon" href="../img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/apple-touch-icon-114x114.png">

</head>
<body>

<div class="account-user-sec">
     <div class="account-sec">
                   <div class="row">
                       <?php 
                            if (isset($_GET['a'])) {
                                $alert=$_GET['a'];
                                if ($alert=='login_required') {
                       ?>
                       <div class="col-md-6 col-md-offset-3">
                            <div role="alert" class="alert color blue-bg fade in alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Maaf!</strong> Anda harus login terlebih dahulu untuk mengakses halaman Admin.
                            </div>
                        </div>
                        <?php 
                            } else if ($alert=='gagal_login') {
                        ?>
                        <div class="col-md-6 col-md-offset-3">
                            <div role="alert" class="alert color red-bg fade in alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <strong>Login gagal!</strong> Username atau password yang Anda masukkan salah.
                            </div>
                        </div>
                        <?php } } ?>
                   </div>
          <div class="acount-sec">
               <div class="container">
                    <div class="row">
                         <div class="col-md-4">
                              <div class="account-detail">
                                   <ul>
                                        <li>
                                             <h3><i class="fa  fa-television"></i>  Login untuk fitur Administrasi</h3>
                                             <p align="justify">Dengan melakukan login menggunakan akun admin
                                                Anda dapat menggunakan fitur CRUD berkaitan dengan administrasi buku dan konten web.
                                             </p>
                                        </li>
                                        <li>
                                             <h3><i class="fa fa-map-o"></i> Butuh bantuan?</h3>
                                             <p align="justify">Anda butuh bantuan? Silakan hubungi admin melalui kontak yang tersedia di
                                                 halaman utama web.
                                             </p>
                                        </li>
                                        <li>
                                             <h3><i class="fa  fa-send-o"></i> Sederhana, Elegan & Super Cepat</h3>
                                             <p>Website kami menyediakan interface yang sederhana, elegan, dan cepat untuk menangani kebutuhan pengguna</p>
                                        </li>
                                   </ul>
                              </div>
                         </div>
                         <div class="col-md-8">
                              <div class="contact-sec">
                                   <div class="row">
                                        <div class="col-md-8 col-md-offset-2">   
                                             <div class="widget-title">
                                                  <h3>RISWAN PROJECT | Admin Panel Login</h3>
                                                  <span>Isikan data Anda untuk masuk ke halaman Admin</span>
                                             </div>
                                             <div class="account-form">
                                                  <form action="lib/login_proses.php" method="post">
                                                       <div class="row">
                                                            <div class="feild col-md-12">
                                                                 <input type="text" name="username" placeholder="Username" />
                                                            </div>
                                                            <div class="feild col-md-12">
                                                                 <input type="password" name="password" placeholder="Password" />
                                                            </div>
                                                            <div class="feild col-md-12">
                                                                 <input type="submit" name="login" value="Login Sekarang" />
                                                            </div>
                                                       </div>
                                                  </form>
                                             </div>
                                        </div>
                                        
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <footer>
              <div class="container">
                  <p>
               RISWAN PROJEK 2018 TEKNIK INFORMATIKA</p>
              </div>
          </footer>
     </div>
</div>

<script src="js/jquery-2.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="https://maps.google.com/maps/api/js?key=AIzaSyDrlCWSCEGTYat1yFIybvtjXe6v24wXY04" 
        async="" 
        type="text/javascript">
</script>


<script src="js/app.js"></script>
<script src="js/common.js"></script>
</body>
</html>