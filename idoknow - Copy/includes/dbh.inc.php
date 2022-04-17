<?php
  $servername="sql300.epizy.com";
  $dbUsername="epiz_30863319";
  $dbPassword="jjY9cWshPLtkA";
  $dbName="epiz_30863319_idoknow";
  $conn=mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);
  if (! $conn){
    die("Connection Failed :".mysqli_connect_error());
  }
 ?>
