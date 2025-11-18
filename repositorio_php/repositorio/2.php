<?php
$name = $_GET['name'];  
echo "<p>Bem-vindo, $name!</p>"; 

echo '<p>Bem-vindo, ' . htmlspecialchars($name, ENT_QUOTES|ENT_SUBSTITUTE, 'UTF-8') . '!</p>';
