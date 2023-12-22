<?php
try {
    $dbname="banco_saint_patrick";
    $servidor="locashost";
    $user="root";
    $password="";
    $conexion = new PDO ("mysql:host=$servidor;dbname=$dbname", $user, $password);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>