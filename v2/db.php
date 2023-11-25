<?php 
/**********************************************
 *       db.php
 *       Skapar en databasuppkoppling
 **********************************************/

 $db = new mysqli("localhost", "root", "root", "filmdb");

// Kontrollera anslutningen
if ($db -> connect_error){
   echo "Failed to connect to MySQL";
   die();
} 

 ?>
