<?php
include_once("function.php");
$insertdata=new DB_con(); 
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$education=$_POST['education'];
$adrss=$_POST['address'];
$sql=$insertdata->insert($fname,$email,$contact,$gender,$education,$adrss);
if($sql)
{
echo "<script>alert('Data inserted');</script>";
}
else
{
echo "<script>alert('Data not inserted');</script>";
}
}
 ?>
<!DOCTYPE html>
<html lang="he" dir="rtl">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Inser Data</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
        <a class="navbar-brand" rel="home" href="#">Insert Data</a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>
	
</nav>

<div class="container-fluid">
  
     
 <!--/left-->
  
  <!--center-->
  <div class="col-sm-6">
    <div class="row">
      <div class="col-xs-12">
        <h3>Insert Data In Databse using PHP OOPS Concept</h3>
		<form name="insert" action="" method="post">
       <table width="100%"  border="0">
  <tr>
    <th width="26%" height="60" scope="row">שם מלא :</th>
    <td width="74%"><input type="text" name="fname" value="" class="form-control" required /></td>
  </tr>
  <tr>
    <th height="60" scope="row">Email :</th>
    <td><input type="email" name="email" value="" class="form-control" required /></td>
  </tr>
  <tr>
    <th height="60" scope="row">מספר טלפון: </th>
    <td><input type="text" name="contact" value="" maxlength="10" class="form-control" required /></td>
  </tr>
  <tr>
    <th height="60" scope="row">מין :</th>
    <td><input type="radio" name="gender" value="Male" required /> זכר  &nbsp;
	<input type="radio" name="gender" value="Female" required /> נקבה</td>
  </tr>
   <tr>
    <th height="60" scope="row">השכלה :</th>
    <td><select name="education" class="form-control">
	<option value="">Select</option>
	<option value="12th">12 שנות לימוד</option>
	<option value="full">בגרות מלאה</option>
	<option value="academ">אקדמאית</option>
	<option value="Toar">תואר</option>
	</select> </td>
  </tr>
  <tr>
    <th height="60" scope="row">כתובת :</th>
    <td><textarea name="address" class="form-control">
	</textarea></td>
  </tr>
  <tr>
    <th height="60" scope="row">&nbsp;</th>
    <td><input type="submit" value="Submit" name="submit" class="btn-primary" /></td>
  </tr>
</table>

     </form>
 
      </div>
    </div>
    <hr>
        
   
  </div><!--/center-->
</div><!--/container-fluid-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>