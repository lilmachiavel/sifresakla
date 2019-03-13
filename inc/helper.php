<?php 
class helper
{
	static function yonlendir($url, $sure=0)
	{
		if($sure != 0)
		{
			header("reflesh: $sure; url=$url;");
		}
		else
		{
		header("location: $url");
		}
	}
}
?>