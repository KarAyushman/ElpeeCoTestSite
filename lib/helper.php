<?php
	//require_once('includes/access.php');
require_once('connect.php');

define('base_dir','http://127.0.0.1:8000/');
define('image_base_dir','http://127.0.0.1:8000/'); 
// define('base_dir','https://elpeeco2023.azurewebsites.net/');
// define('image_base_dir','https://elpeeco2023.azurewebsites.net/');

// echo constant('base_dir');

class helper extends connect{

	function select($field,$table,$condition){

		if(empty($condition)){
			$condition=1;
		}

		  $str = "select $field from $table where $condition";


		$result = $this->conn->query($str) or die($this->conn->error);			


		if($result->num_rows >0){


			while($ans =$result->fetch_array(MYSQL_BOTH)){

				$data[] = $ans;
			}
			return $data;
		}

		else{
			return 0;
		}

	}

	function delete($table,$condition=1){

		if(empty($condition)){
			$condition = 1;
		}

		$str = "delete from $table where $condition";

		$this->conn->query($str) or die($this->conn->error);
	}


	function update($table,$field,$condition=1){

		if(empty($condition)){ $condition=1; }

		$str = "update $table set $field where $condition ";
		$this->conn->query($str) or die($this->conn->error);
	}

	function data_filter($data){
		return addslashes(strip_tags(trim($data)));
	}

	function data_editor_filter($data){
		return $this->conn->real_escape_string(addslashes(trim($data)));
	}

	function select_prepare($field,$table,$condition,$param_type,$a_bind_params){
		$a_params = array();
		if(!empty($a_bind_params)){

			$a_params[] = & $param_type;

			$n = strlen($param_type);
			for($i = 0; $i < $n; $i++) {
				$a_params[] = & $a_bind_params[$i];
			}
		}
		else{
			$condition="1=?";
			$param_type = "s";
			$a_bind_params = array("1");
			$a_params[] = & $param_type;
			$a_params[] = & $a_bind_params[0];
		}	
		$query = "SELECT $field FROM $table WHERE $condition";

		$result_query = $this->conn->prepare($query);
		call_user_func_array(array($result_query, 'bind_param'), $a_params);
		if($result_query->execute()){
			$data = array();
			$res = $result_query->get_result();
			while($row = $res->fetch_array(MYSQLI_BOTH)) {
				array_push($data, $row);
			}
			if(empty($data)){
				return 0;
			}
			else{	
				return $data;
			}
		}
		else{
			return "Error";
		}
	}

	function generate_random_string($digits,$db_check,$table,$field)
	{
		$generated_string = '';

		$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$res = "";
		for ($i = 0; $i < $digits; $i++) {
			$res .= $chars[mt_rand(0, strlen($chars)-1)];
		}

		if($db_check == 'true')
		{
			$check_db = $this->select("*","$table","$field = '$res'");

			if(is_array($check_db))
			{
				$generated_string = $this->generate_random_string($digits,$db_check,$table,$field);
			}
			else
			{
				$generated_string = $res;
			}
		}
		else
		{
			$generated_string = $res;
		}

		return $generated_string;

	}

}

$obj = new helper();
?>	