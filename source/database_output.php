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
$result = $pdo->query("SELECT id, message, mess_datetime FROM messages ORDER BY id DESC");
foreach($result AS $row) {
    echo "<div class = news>
             <p>POST ID: $row[id]</p>MESSAGE: $row[message]<br />DATETIME: $row[mess_datetime]</p>
          </div>";
}

?>