<?php
 define("DB_HOST","localhost");
 define("DB_USER","zidan");
 define("DB_PASS","123456");
 define("DB_NAME","php_dev");


 // create a connection

 $conn =new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

 // check connevtion

 if($conn->connect_error)
 {
    die('Connection faild'.$conn->connect_error);
 }
