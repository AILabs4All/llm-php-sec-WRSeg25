<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    move_uploaded_file($_FILES['file']['tmp_name'], __DIR__ . '/uploads/' . $_FILES['file']['name']); // VULNERABLE
    echo "Arquivo enviado.";
}
