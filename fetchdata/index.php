<?php
include_once("function.php");
$fetchdata=new DB_con(); 

 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Fetch Data from DB</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
        <a class="navbar-brand" rel="home" href="#">Home</a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Link </a></li>
                <li><a href="#">Link</a></li>
                <li class="divider"></li>
                <li><a href="#">Link</a></li>
                <li class="divider"></li>
                <li><a href="#">Link</a></li>
              </ul>
            </li>
		</ul>
		
	</div>
</nav>

<div class="container-fluid">
  

      
     
 <!--/left-->
  
  <!--center-->
  <div class="col-sm-8">
    <div class="row">
      <div class="col-xs-12">
        <h3>Fetch Data From Database Using OOPS Concept</h3>
		<hr >

     <table width="100%"  border="0" >
  <tr>
    <th width="9%" height="42" scope="col" >ID</th>
    <th width="13%" scope="col">שם</th>
    <th width="11%" scope="col">Email</th>
    <th width="11%" scope="col">מספר טלפון</th>
    <th width="11%" scope="col">מין</th>
    <th width="13%" scope="col">השכלה</th>
    <th width="13%" scope="col">כתובת</th>
    <th width="19%" scope="col">תאריך הרשמה</th>
  </tr>
  <?php
  $sql=$fetchdata->fetchdata();
  $cnt=1;
  while($row=mysqli_fetch_array($sql))
  {
  ?>
  <tr>
      <td height="29"><?php echo $cnt;?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['contactno'];?></td>
    <td><?php echo $row['gender'];?></td>
    <td><?php echo $row['education'];?></td>
    <td><?php echo $row['addrss'];?></td>
    <td><?php echo $row['posting_date'];?></td>

  </tr>
  <?php $cnt=$cnt+1;} ?>
</table>


   
 
      </div>
    </div>
        
   
  </div><!--/center-->

<!--/right-->
  <hr>
</div><!--/container-fluid-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>