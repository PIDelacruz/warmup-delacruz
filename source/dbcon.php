<?php
$dsn = "mysql:host=localhost;dbname=warmup";
    $opt = [
            PDO::ATTR_ERRMODE              =>  PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE   =>   PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES     =>  false
        ];
 try{
    $pdo = new PDO($dsn, 'root', 'warmup', $opt);
 }catch(PDOException $e){
     echo "Connection failed: " . $e->getMessage();
 }
?>