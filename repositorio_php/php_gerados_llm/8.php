<?php
// file: vuln_password.php
// VULN: Senha armazenada em plain-text (simulação)
$username = $_POST['username'];
$password = $_POST['password'];
// imagine salvar em arquivo/DB sem hash:
// file_put_contents('users.txt', "$username:$password\n", FILE_APPEND); // VULNERABLE

// DETECTION:
// - uso de funções de escrita com concatenação de senha
// - ausência de password_hash/password_verify
//
// FIX:
$hash = password_hash($password, PASSWORD_DEFAULT);
// salvar $hash em DB; verificar com password_verify
