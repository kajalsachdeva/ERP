<?php
class dbconnect{
    public function connect(){
         $host = 'localhost';
         //echo $host;
         $user = 'root';
         $pass = '';
         $db = 'Erp';
         $connection = mysqli_connect($host,$user,$pass,$db); 
         return $connection;
     }
}