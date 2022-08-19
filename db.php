<?php
    try
    {
        $db = new PDO("mysql:host=localhost;dbname=live;charset=utf8mb4;", 'root', '');
    }

    catch( PDOException $error )
    {
        die( $error->getMessage() );
    }
?>