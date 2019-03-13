<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
        <title>Şifre Depolama</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="./assets/images/favicon.ico" />

        <!-- DataTables -->
        <link href="./assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="./assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/style.css" rel="stylesheet" type="text/css" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>


    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                        <!--Upcube-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="./" class="logo">
                            <span class="logo-small"> ŞY </span>
                            <span class="logo-large"> ŞİFRE YÖNETİM</span>
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-inline float-right mb-0">
                            <!-- notification-->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-bell-outline noti-icon"></i>
                                    <span class="badge badge-danger noti-icon-badge">3</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>Notification (3)</h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                        <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                        <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                    </a>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        View All
                                    </a>

                                </div>
                            </li>
                            <!-- User-->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="./assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profili Düzenle</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i>Çıkış</a>
                                </div>
                            </li>
                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="./"><i class="ti-home"></i>Anasayfa</a>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="ti-crown"></i>Şifre Deposu</a>
                                <ul class="submenu">
                                    <li><a href="./depo-ekle.php">Ekle</a></li>
                                    <li><a href="./depo.php">Listele</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                                    <li class="breadcrumb-item"><a href="#">Şifre Deposu</a></li>
                                    <li class="breadcrumb-item active">Listele</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Şifre Listele</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>PLATFORM</th>
                                        <th>KULLANICI ADI / MAIL</th>
                                        <th>ŞİFRE</th>
                                        <th>DİĞER BİLGİLER(AÇIKLAMA)</th>
                                        <th>Düzenleme</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Facebook</td>
                                        <td>sanalburak0@gmail.com</td>
                                        <td>****** <button type="button" class="btn btn-warning waves-effect waves-light" id="alertify-confirm">Göster</button> </td>
                                        <td>yok</td>
                                        <td><button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Düzenle</button> <button type="button" class="btn btn-danger waves-effect waves-light">Sil</button></td>                                        
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Facebook</td>
                                        <td>sanalburak0@gmail.com</td>
                                        <td>****** <button type="button" class="btn btn-warning waves-effect waves-light" id="alertify-confirm">Göster</button> </td>
                                        <td>yok</td>
                                        <td><button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Düzenle</button> <button type="button" class="btn btn-danger waves-effect waves-light">Sil</button></td>                                        
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Facebook</td>
                                        <td>sanalburak0@gmail.com</td>
                                        <td>****** <button type="button" class="btn btn-warning waves-effect waves-light" id="alertify-confirm">Göster</button> </td>
                                        <td>yok</td>
                                        <td><button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Düzenle</button> <button type="button" class="btn btn-danger waves-effect waves-light">Sil</button></td>                                        
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Facebook</td>
                                        <td>sanalburak0@gmail.com</td>
                                        <td>****** <button type="button" class="btn btn-warning waves-effect waves-light" id="alertify-confirm">Göster</button> </td>
                                        <td>yok</td>
                                        <td><button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Düzenle</button> <button type="button" class="btn btn-danger waves-effect waves-light">Sil</button></td>                                        
                                    </tr> 
                                    <tr>
                                        <td>1</td>
                                        <td>Facebook</td>
                                        <td>sanalburak0@gmail.com</td>
                                        <td>****** <button type="button" class="btn btn-warning waves-effect waves-light" id="alertify-confirm">Göster</button> </td>
                                        <td>yok</td>
                                        <td><button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Düzenle</button> <button type="button" class="btn btn-danger waves-effect waves-light">Sil</button></td>                                        
                                    </tr> 
                                    <tr>
                                        <td>1</td>
                                        <td>Facebook</td>
                                        <td>sanalburak0@gmail.com</td>
                                        <td>****** <button type="button" class="btn btn-warning waves-effect waves-light" id="alertify-confirm">Göster</button> </td>
                                        <td>yok</td>
                                        <td><button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Düzenle</button> <button type="button" class="btn btn-danger waves-effect waves-light">Sil</button></td>                                        
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Facebook</td>
                                        <td>sanalburak0@gmail.com</td>
                                        <td>****** <button type="button" class="btn btn-warning waves-effect waves-light" id="alertify-confirm">Göster</button> </td>
                                        <td>yok</td>
                                        <td><button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Düzenle</button> <button type="button" class="btn btn-danger waves-effect waves-light">Sil</button></td>                                        
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Facebook</td>
                                        <td>sanalburak0@gmail.com</td>
                                        <td>****** <button type="button" class="btn btn-warning waves-effect waves-light" id="alertify-confirm">Göster</button> </td>
                                        <td>yok</td>
                                        <td><button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Düzenle</button> <button type="button" class="btn btn-danger waves-effect waves-light">Sil</button></td>                                        
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Facebook</td>
                                        <td>sanalburak0@gmail.com</td>
                                        <td>****** <button type="button" class="btn btn-warning waves-effect waves-light" id="alertify-confirm">Göster</button> </td>
                                        <td>yok</td>
                                        <td><button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Düzenle</button> <button type="button" class="btn btn-danger waves-effect waves-light">Sil</button></td>                                        
                                    </tr> 
                                    <tr>
                                        <td>1</td>
                                        <td>Facebook</td>
                                        <td>sanalburak0@gmail.com</td>
                                        <td>****** <button type="button" class="btn btn-warning waves-effect waves-light" id="alertify-confirm">Göster</button> </td>
                                        <td>yok</td>
                                        <td><button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Düzenle</button> <button type="button" class="btn btn-danger waves-effect waves-light">Sil</button></td>                                        
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Facebook</td>
                                        <td>sanalburak0@gmail.com</td>
                                        <td>****** <button type="button" class="btn btn-warning waves-effect waves-light" id="alertify-confirm">Göster</button> </td>
                                        <td>yok</td>
                                        <td><button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Düzenle</button> <button type="button" class="btn btn-danger waves-effect waves-light">Sil</button></td>                                        
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Facebook</td>
                                        <td>sanalburak0@gmail.com</td>
                                        <td>****** <button type="button" class="btn btn-warning waves-effect waves-light" id="alertify-confirm">Göster</button> </td>
                                        <td>yok</td>
                                        <td><button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Düzenle</button> <button type="button" class="btn btn-danger waves-effect waves-light">Sil</button></td>                                        
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Facebook</td>
                                        <td>sanalburak0@gmail.com</td>
                                        <td>****** <button type="button" class="btn btn-warning waves-effect waves-light" id="alertify-confirm">Göster</button> </td>
                                        <td>yok</td>
                                        <td><button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Düzenle</button> <button type="button" class="btn btn-danger waves-effect waves-light">Sil</button></td>                                        
                                    </tr> 
                                    <tr>
                                        <td>1</td>
                                        <td>Facebook</td>
                                        <td>sanalburak0@gmail.com</td>
                                        <td>****** <button type="button" class="btn btn-warning waves-effect waves-light" id="alertify-confirm">Göster</button> </td>
                                        <td>yok</td>
                                        <td><button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Düzenle</button> <button type="button" class="btn btn-danger waves-effect waves-light">Sil</button></td>                                        
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Facebook</td>
                                        <td>sanalburak0@gmail.com</td>
                                        <td>****** <button type="button" class="btn btn-warning waves-effect waves-light" id="alertify-confirm">Göster</button> </td>
                                        <td>yok</td>
                                        <td><button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Düzenle</button> <button type="button" class="btn btn-danger waves-effect waves-light">Sil</button></td>                                        
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Facebook</td>
                                        <td>sanalburak0@gmail.com</td>
                                        <td>****** <button type="button" class="btn btn-warning waves-effect waves-light" id="alertify-confirm">Göster</button> </td>
                                        <td>yok</td>
                                        <td><button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Düzenle</button> <button type="button" class="btn btn-danger waves-effect waves-light">Sil</button></td>                                        
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Facebook</td>
                                        <td>sanalburak0@gmail.com</td>
                                        <td>****** <button type="button" class="btn btn-warning waves-effect waves-light" id="alertify-confirm">Göster</button> </td>
                                        <td>yok</td>
                                        <td><button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Düzenle</button> <button type="button" class="btn btn-danger waves-effect waves-light">Sil</button></td>                                        
                                    </tr>                                                                                                                                                                                                                                                                                                 
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->



        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        © 2019 <i class="mdi mdi-heart text-danger"></i> Burak Alaca
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->



        <!-- jQuery  -->
        <script src="./assets/js/jquery.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/modernizr.min.js"></script>
        <script src="./assets/js/waves.js"></script>
        <script src="./assets/js/jquery.slimscroll.js"></script>
        <script src="./assets/js/jquery.nicescroll.js"></script>
        <script src="./assets/js/jquery.scrollTo.min.js"></script>

        <!-- Required datatable js -->
        <script src="./assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="./assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="./assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="./assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="./assets/plugins/datatables/jszip.min.js"></script>
        <script src="./assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="./assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="./assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="./assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="./assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="./assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="./assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="./assets/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="./assets/js/app.js"></script>

    </body>
</html>