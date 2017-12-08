<?php
  
  include_once("MySQL.php");
  include_once("Utils.php");
  
  $utils = new Utils();
  $db = $utils->getDatabaseConnection();
   
  $db->connect();
  $db->executeCommand("SELECT * FROM USUARIOS");
  while($tbl = $db->getNextResultSetPosition())
    echo $tbl["USUARIO"]."<BR>";
  
  $db->disconnect();
 
?>
