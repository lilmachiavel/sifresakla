<?php
require_once "../inc/baglanti.php";
if($sessionManager->kontrol())
{
	sessionManager::sessionSil();
	helper::yonlendir("../giris.php");
}
else
{
	helper::yonlendir("../giris.php");
}
?>