<?php
$port = 1433;
$serverName = "examenu2.database.windows.net" . $port;
$database = "EXAMENU2";
$userName = "Student";
$password = "Pa55w.rd";

try {
    $conn = new PDO("sqlsrv:server = $serverName,$port; Database = $database", $userName, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    <CENTER>
    <br>
    echo "CONEXIÓN EXITOSA";
    <br>
    <br>
    <br>
    echo "EXAMEN REALIZADO POR GUSTAVO VERA Y ALAN SAMPERIO";
    </CENTER>
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;
