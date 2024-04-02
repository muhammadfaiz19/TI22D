<?php 

$sName = "sql.freedb.tech";
$uName = "freedb_mfaiz";
$pass = "!7Ck5?9tF7%G?aH";
$db_name = "freedb_to-do-list";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}