<?php
 //class for database connection
 
class connect
{
   public $conn;

   public function __construct()
   {
      $this->db_connect();
   }
   public function db_connect()
   {
      $this->conn = mysqli_connect('localhost','root','','rumpledb');
      if(mysqli_connect_error())
      {
         echo "Connection Failed";
      } else {
        //   echo "Connected";
      }
   }


   }

 ?>