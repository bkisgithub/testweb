<?php
  // SQL Server Extension Sample Code:
  $connectionInfo = array("UID" => "apuadmin", "pwd" => "apu@123456", 
  "Database" => "WebApplicationDb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
  $serverName = "tcp:webapplicationtp000000.database.windows.net,1433";
  $conn = sqlsrv_connect($serverName, $connectionInfo);
  
  if(!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
  
  $sql = "INSERT INTO restaurant (restaurant_name, restaurant_address, restaurant_phone) VALUES (?, ?, ?)";
  $params = array("Burger King", "Bukit Jalil", "03-11223444");

 

  $stmt = sqlsrv_query( $conn, $sql, $params);
  if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
   }
?>
