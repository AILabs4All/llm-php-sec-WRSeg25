<?php
// file: vuln_xss.php
// VULN: XSS (refletido)
$name = $_GET['name'];   // usuário controla
echo "<p>Bem-vindo, $name!</p>"; // VULNERABLE: saída HTML sem escape

// DETECTION:
// - echo com variáveis derivadas de $_GET/$_POST sem htmlspecialchars/htmlentities
// - presença de tags HTML próximas à variável inserida
//
// FIX:
echo '<p>Bem-vindo, ' . htmlspecialchars($name, ENT_QUOTES|ENT_SUBSTITUTE, 'UTF-8') . '!</p>';
