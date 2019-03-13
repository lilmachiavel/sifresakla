<?php
require_once "inc/baglanti.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
        <title>Şifre Depolama - Giriş</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="./assets/images/favicon.ico" />

        <!-- App css -->
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/style.css" rel="stylesheet" type="text/css" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>


    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mt-0 m-b-15"> ŞİFRE YÖNETİM
                        <!--<a href="./index.php" class="logo logo-admin"><img src="./assets/images/logo-dark.png" height="30" alt="logo" /></a>-->
                    </h3>

                    <h4 class="text-muted text-center font-18"><b>Giriş Yap</b></h4>
                    <?php 
                        if($_POST){
                            $mail = strip_tags($_POST['mail']);
                            $sifre = strip_tags($_POST['sifre']);
                            if($mail!= "" and $sifre != "")
                            {
                                $sifre = md5($sifre);
                                $sorgu = $baglanti->db->prepare("SELECT * FROM uyeler WHERE uyemail = :mail and uyesifre = :sifre");
                                $sorgu->bindParam(":mail", $mail, PDO::PARAM_STR);
                                $sorgu->bindParam(":sifre", $sifre, PDO::PARAM_STR);
                                $sorgu->execute();
                                $sayi = $sorgu->rowCount();
                                if($sayi == 0){
                                    echo "Bu bilgilere göre kullanıcı bulunamadı hatalı giriş.";
                                }else{
                                        $giris = ["mail"=>$mail, "sifre"=> $sifre];
                                        print_r($giris);
                                        sessionManager::sessionOlustur($dizi);
                                        helper::yonlendir(SITE_URL);
                                }
                            }else{

                            }

                        }else{

                        }
                    ?>   
                    <div class="p-3">
                        <form class="form-horizontal m-t-20" method="POST" />

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" name="mail" required="" placeholder="Kullanıcı adı" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="password" name="sifre" required="" placeholder="Şifre" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="hatirla" value="1" id="customCheck1" />
                                        <label class="custom-control-label" for="customCheck1">Beni Hatırla</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-info btn-block waves-effect waves-light" type="submit">Giriş Yap</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-sm-7 m-t-20">
                                    <a href="./pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock    "></i> Şifre mi unuttum?</a>
                                </div>
                                <!--<div class="col-sm-5 m-t-20">
                                    <a href="./pages-register.html" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
                                </div>-->
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>



        <!-- jQuery  -->
        <script src="./assets/js/jquery.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/modernizr.min.js"></script>
        <script src="./assets/js/waves.js"></script>
        <script src="./assets/js/jquery.slimscroll.js"></script>
        <script src="./assets/js/jquery.nicescroll.js"></script>
        <script src="./assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="./assets/js/app.js"></script>

    </body>
</html>