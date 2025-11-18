<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    file_put_contents('flag.txt', "changed by {$_POST['user']}\n");
    echo "OK";
}

