<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=crud_db;charset=utf8",'root','');
} catch (PDOException $e) {
    print $e->getMessage();
}

?>
