<?php
// file: vuln_eval.php
// VULN: Uso de eval com input do usuário
$code = $_GET['code']; // controlado pelo usuário
eval($code); // VULNERABLE: executa código arbitrário

// DETECTION:
// - presença de eval() com variáveis de input
// - funções similares: create_function(), preg_replace with /e modifier (antigo)
//
// FIX:
// Evite eval completamente. Se precisar de lógica dinâmica, usar interpretadores/sandbox ou design diferente.
