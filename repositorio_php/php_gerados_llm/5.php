<?php
// file: vuln_cmd.php
// VULN: Command injection (exec com input sem sanitizar)
$ip = $_GET['ip']; // ex: ?ip=1.2.3.4
$output = [];
exec("ping -c 1 $ip", $output); // VULNERABLE
echo implode("\n", $output);

// DETECTION:
// - uso de exec/system/shell_exec/passthru com variáveis de input
// - ausência de escapeshellarg/whitelist
//
// FIX:
// $safeIp = escapeshellarg($ip);
// exec("ping -c 1 $safeIp", $output);
