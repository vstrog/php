<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'insertData');
class DB_con
{
	function __construct()
	{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
	}
	public function insert($fname,$email,$contact,$gender,$education,$adrss)
	{
	$ret=mysqli_query($this->dbh,"insert into insertdata(name,email,contactno,gender,education,addrss) values('$fname','$email','$contact','$gender','$education','$adrss')");
	return $ret;
	}
} 
?>