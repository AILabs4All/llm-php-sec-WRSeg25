<?php
// file: vuln_sql.php
// VULN: SQL Injection (uso de interpolação direta)
require 'db.php'; // suprassuma $pdo é um PDO conectado
$user = $_GET['user'];            // input controlado pelo usuário
$query = "SELECT * FROM users WHERE username = '$user'"; // VULNERABLE
$res = $pdo->query($query);
foreach ($res as $row) {
    echo htmlspecialchars($row['username']);
}

// DETECTION:
// - concatenação/interpolação de $_GET/$_POST em query SQL
// - ausência de prepare()/bindParam()
// - funções pdo->query executando strings construídas
//
// FIX (remediação):
// Use prepared statements e validação:
$stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
$stmt->execute([$_GET['user']]);
