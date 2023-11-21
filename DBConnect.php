<?php
DEFINE ('DB_USER', 'Your DB Username');
DEFINE ('DB_PASSWORD','Your DB Password');        
DEFINE ('DB_HOST', 'localhost');        
DEFINE ('DB_NAME', 'Your DB Name');  

@$DB = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if (mysqli_connect_errno()){
    echo 'Cannot connect to the database: ' . mysqli_connect_error();
  }
?>
