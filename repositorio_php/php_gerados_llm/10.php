<?php
// file: vuln_redirect.php
// VULN: Redirect aberto para URL do usuário
$url = $_GET['url'];
header("Location: $url"); // VULNERABLE
exit;

// DETECTION:
// - header("Location: ") com input sem validação
//
// FIX:
// - somente permitir redirects para uma whitelist de domínios/paths
