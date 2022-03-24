<?php
include('dbcon.php');

$result = $pdo->query("SELECT id, message, mess_datetime FROM messages ORDER BY id DESC");
foreach($result AS $row) {
    echo "<div class = news>
             <p>POST ID: $row[id]</p>MESSAGE: $row[message]<br />DATETIME: $row[mess_datetime]</p>
          </div>";
}

?>