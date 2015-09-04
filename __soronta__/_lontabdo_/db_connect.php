<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=fasso_karanta', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $error = $e->getMessage();
}