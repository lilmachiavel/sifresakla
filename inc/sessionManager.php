<?php


class sessionManager extends baglanti 
{
	static function sessionOlustur($array = [])
	{
		if(count($array)!=0)
		{
			foreach ($array as $key => $value)
			{
				$_SESSION[$key] = $value;

			}
		}
	}

	static function sessionSil()
	{
		session_destroy();
	}

	public function kontrol()
	{
		if(isset($_SESSION['mail']) and isset($_SESSION['kad']) and isset($_SESSION['sifre']))
		{
			$mail = strip_tags($_SESSION['mail']);
			$kad = strip_tags($_SESSION['kad']);
			$sifre = strip_tags($_SESSION['sifre']);
			$kontrol = $this->db->prepare("SELECT * FROM uyeler WHERE uyemail= :mail and uyekad= :kad and uyesifre= :sifre");
			$kontrol->bindParam(":mail", $mail, PDO::PARAM_STR);
			$kontrol->bindParam(":kad", $kad, PDO::PARAM_STR);
			$kontrol->bindParam(":sifre", $sifre, PDO::PARAM_STR);
			$kontrol->execute();
			$sayi = $kontrol->rowCount();
			if($sayi ==0)
			{
				return false;
			}
			else
			{
				return true;
			}
		}
		else
		{
			return false;
		}
	}

	public function kullaniciBilgi()
	{
		if($this->kontrol())
		{
			$sorgu = $this->db->prepare("SELECT * FROM uyeler WHERE uyemail= :mail and uyesifre= :sifre");
			$sorgu->bindParam(":mail", $_SESSION['mail'], PDO::PARAM_STR);
			$sorgu->bindParam(":sifre", $_SESSION['sifre'], PDO::PARAM_STR);
			$sorgu->execute();
			return $sorgu->fetch(PDO::FETCH_ASSOC);


		}
		else
		{
			return false;
		}
	}

}

?>