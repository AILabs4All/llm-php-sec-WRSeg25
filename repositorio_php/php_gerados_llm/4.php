<?php
// file: vuln_include.php
// VULN: LFI/RFI (inclui arquivo controlado pelo usuário)
$page = $_GET['page']; // ex: ?page=about.php
include __DIR__ . '/pages/' . $page; // VULNERABLE

// DETECTION:
// - include/require com concatenação de input de usuário
// - falta de whitelist ou normalização do caminho
//
// FIX:
// $allowed = ['about.php','home.php'];
// if (in_array($page, $allowed)) include __DIR__.'/pages/'.$page;
