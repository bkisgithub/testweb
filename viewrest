<?php
$connectionInfo = array("UID" => "apuadmin", "pwd" => "Apu12345", "Database" => "testwebappDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:testwebapptp048143.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

  if(!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
  echo "Connection to Db: Success!";
?>
