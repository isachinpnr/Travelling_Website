<?php
       
       $username = "root";
       $password = "";
       $server = 'localhost';
       $db = 'testdb';


       $con = mysqli_connect($server,$username,$password,$db);

       if($con){
           echo "connection successful";

       }else {
           echo "no conection";
       }

?>
