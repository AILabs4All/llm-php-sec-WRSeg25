<?php

$username = $_POST['username'];
$password = $_POST['password'];
file_put_contents('users.txt', "$username:$password\n", FILE_APPEND);