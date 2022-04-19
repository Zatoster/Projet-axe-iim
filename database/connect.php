<?php
try {
    $database = new PDO('mysql:host=localhost:8889;dbname=projetCDI', 'root', 'root');
} catch (PDOException $error) {
    echo $error;
    die();
}
