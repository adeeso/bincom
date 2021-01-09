<?php 

//class database connection class
class DatabaseConfig{
//member variables
public $dbcon; //database connection handler

//member function/method

public function __construct(){
//connection by instantiating MYSQLI class
	$this->dbcon=new mysqli('localhost', 'root', '', 'bincom');

	//check connection

	if ($this->dbcon->connect_errno) {
		die('connection failed '. $this->dbcon->connect_error);
	}//else{
		//echo "connection successful";
	//}

}

}

class Pollingunit{

		//member variable
public $dbcon;
public $servername;
public $username;
public $password;
public $db;

public function __construct($servername, $username, $password, $db)
{
	$this->servername=$servername;
	$this->username=$username;
	$this->password=$password;
	$this->db=$db;

	$this->dbcon=new mysqli($this->servername, $this->username, $this->password, $this->db);
// to check connection error and may not be neccessary if no error
      
      if(!empty($this->dbcon->connect_errorno)){
       die($this->dbcon->connect_error);
}


}

public function getpollingUnit(){
 //write query to fetch a polling unit

	$sql="SELECT * FROM polling_unit WHERE ward_id=1 ";

		//check if the query() runs the sql statement//to fetch
   
   if($result=$this->dbcon->query("SELECT * FROM polling_unit WHERE ward_id=1 ")){
         
         $output=$result->fetch_all(MYSQLI_ASSOC);
  }else{
    echo "Error: ", $this->dbcon->error;
}return $output;


}

public function gettotalResult(){
	
}

}

 ?>