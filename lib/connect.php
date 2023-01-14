<?php
	class connect {
		public $conn;
		
		function __construct() { 
		// $this->conn = mysqli_connect("localhost","gurukrupa1","u1,x*u~X6(;6","gurukrupa_db") or die (mysqli_connect_error());
		//$this->conn = mysqli_connect("localhost","root","","gurukrupa") or die ('Failed to connect to the database');
		}
		function __destruct() {
		//	$ans=$this->conn->close();
		}
	}
	
?>