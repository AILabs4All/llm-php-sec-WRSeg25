<?php
// file: vuln_csrf.php
// VULN: Endpoint que altera estado sem CSRF token
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // realiza ação sensível
    file_put_contents('flag.txt', "changed by {$_POST['user']}\n");
    echo "OK";
}

// DETECTION:
// - POST endpoints que alteram estado sem checar token/sessão
// - inexistência de header/hidden token
//
// FIX:
// - usar token CSRF por sessão e validar no POST
