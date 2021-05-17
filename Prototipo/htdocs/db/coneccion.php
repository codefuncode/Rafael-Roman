<?php

function Cerrar_Cursor($stmt)
{
    $stmt->closeCursor();
}
function Cerrar_Coneccion($conn)
{
    $conn = null;
}

function Coneccion_DB()
{

    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "rafael_roman";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        return "Connection failed: " . $e->getMessage();
    }
}
