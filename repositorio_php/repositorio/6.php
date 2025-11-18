<?php
$data = $_POST['data']; 
$obj = unserialize($data); 
if ($obj->isAdmin ?? false) {
    echo "Admin!";
}
