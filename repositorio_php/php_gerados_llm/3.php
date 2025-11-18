<?php
// file: vuln_upload.php
// VULN: Upload inseguro — aceita e move sem checagem
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    move_uploaded_file($_FILES['file']['tmp_name'], __DIR__ . '/uploads/' . $_FILES['file']['name']); // VULNERABLE
    echo "Arquivo enviado.";
}

// DETECTION:
// - uso de move_uploaded_file() com $_FILES['name'] direto
// - ausência de validação de tipo MIME, extensão, tamanho, ou verificação de conteúdo
//
// FIX (remediação):
// - validar MIME e extensão
// - gerar nomes únicos (hash) e armazenar fora do webroot
// - impedir execução no diretório uploads (config do servidor)
