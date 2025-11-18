<?php
// file: vuln_deserialize.php
// VULN: Insecure deserialization
$data = $_POST['data']; // usuário envia string serializada
$obj = unserialize($data); // VULNERABLE: pode instanciar objetos perigosos
if ($obj->isAdmin ?? false) {
    echo "Admin!";
}

// DETECTION:
// - uso de unserialize() diretamente em dados de entrada
// - checar fluxos onde objetos são criados a partir de dados externos
//
// FIX:
// - usar json_decode/encode em vez de serialize/unserialize
// - ou usar allowed_classes=false em unserialize: unserialize($data, ["allowed_classes" => false])
