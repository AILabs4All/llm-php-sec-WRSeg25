<?php

$ip = $_GET['ip'];
$output = [];
exec("ping -c 1 $ip", $output);
echo implode("\n", $output);
