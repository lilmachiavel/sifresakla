<?php
require_once 'inc/baglanti.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
        <title></title>
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

                    <h2 class="text-muted text-center"><b>Kayıt Ol</b></h2>


                    <?php
                    if($_POST)
                    {
                        // Post'tan gelen verileri değişkene aktarma
                        $mail = strip_tags($_POST['mail']);
                        $kad = strip_tags($_POST['kad']);
                        $sifre = strip_tags($_POST['sifre']);
                        $onay = "1";

                        if($mail !="" and $kad != "" and $sifre !="")
                        {
                            if(filter_var($mail, FILTER_VALIDATE_EMAIL))
                            {
                                $kontrol = $baglanti->db->prepare("SELECT * FROM uyeler WHERE uyemail = :mail");
                                $kontrol->bindParam(":mail", $mail, PDO::PARAM_STR);
                                $kontrol->execute();
                                $sayi = $kontrol->rowCount();
                                if($sayi == 0)
                                {
                                    $sorgu = $baglanti->db->prepare("INSERT into uyeler(uyemail,uyekad,uyesifre,uyeonay) values(?,?,?,?)");
                                    $ekle = $sorgu->execute(array($mail,$kad,md5($sifre), $onay));
                                    if($ekle)
                                    {
                                        $dizi = ["mail"=>$mail, "kad"=>$kad, "sifre"=> md5($sifre), "uyeonay" => $onay];
                                        sessionManager::sessionOlustur($dizi);
                                        helper::yonlendir(SITE_URL);
                                    }else{
                                        echo "üzgünüm kayıt olamadın :(";
                                    }
                                }
                                else
                                {

                                    echo "Böyle bir kullanıcı mevcut";
                                }
                            }else{
                                echo "format yanlis";
                            }
                        }
                        else
                        {
                            echo "lütfen tüm alanları doldur";
                        }
                    }
                    ?>

                    <div class="p-3">
                        <form class="form-horizontal m-t-20" action="" method="post" />

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="email" name="mail" required="" placeholder="Mail Adresi" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" name="kad" required="" placeholder="Kullanıcı Adı" />
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
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                        <label class="custom-control-label font-weight-normal" for="customCheck1">Kabul ediyorum <a href="#" class="text-muted">Şartları ve Koşulları</a></label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-info btn-block waves-effect waves-light" type="submit">Kayıt Ol</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20 text-center">
                                    <a href="/giris.php" class="text-muted">Zaten hesabınız var mı?</a>
                                </div>
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