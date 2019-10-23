//PHP mysql database connection

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $conn =mysqli_connect($servername, $username, $password);
  if (!$conn)
  {
      die("connection failed: " . mysqli_connect_error());
  }
  $sql = "CREATE DATABASES home1";
  if (mysqli_query($conn, $sql))
  {
      echo "Databases created successfully";
  }
  else
  {
      echo "Error creating databases: " . mysqli_error($conn);
  }
  mysqli_close($conn);
