<?php

class baglanti
{
	public $db
	function __construct()
	{
		$this->db = new PDO("mysql:host=localhost;dbname=link;charset=utf8", "root","");
		
	}
}


?>