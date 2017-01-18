<?php
class Database{
	//Данные для подключения к базе
	var $host="localhost";
        var $db_name="giddb";
        var $user_name="root";
        var $user_pass="";	
	
	
	
	//Подключение к базе-----------------------------------------------------------------------------------
	public function db_connect(){
		
		$this->conn = mysqli_connect($this->host, $this->user_name, $this->user_pass, $this->db_name);
		if (!$this->conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		else{
			//echo "Ok";
		}
	
	
		
	}
	//-----------------------------------------------------------------------------------------------------



	
	
	//Записываем в таблицу-------------------------------------------------------------------------------------
	public function db_insert($table_name, $arr){
		
		$conn=$this->db_connect();
		$conn= $this->conn;
		$arr_key=  array_keys($arr);

	foreach($arr_key as $key){
		
		$arr_keys=$arr_keys.$key.",";
		$arr_values=$arr_values."'".mysql_escape_string($arr[$key])."',";
	}

		$arr_keys=substr($arr_keys,0,-1);
		$arr_values=substr($arr_values,0,-1);
		
		$sql = "INSERT INTO ".$table_name." (".$arr_keys.") VALUES(".$arr_values.")";
		if (mysqli_query($conn, $sql)) {
			//echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);

	}
	//-----------------------------------------------------------------------------------------------------
	




	
	
}
?>
