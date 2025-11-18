<?php
require 'db.php'; 
$user = $_GET['user'];           
$query = "SELECT * FROM users WHERE username = '$user'";
$res = $pdo->query($query);
foreach ($res as $row) {
    echo htmlspecialchars($row['username']);
}