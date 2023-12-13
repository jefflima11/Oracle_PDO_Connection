<?php
$tns = "
(DESCRIPTION = 
    (ADDRESS_LIST =
        (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.255.255)(PORT = 1521))
    )
    (CONNECT_DATA = 
        (SERVICE_NAME = PRD)
    )
)
";

$db_username = "Admin";
$db_password = "Admin";

try {
    $conn = new PDO("oci:dbname=".$tns,$db_username,$db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem sucedida!";
} catch (PDOException $e) {
    echo "Conexão falhou: " . $e->getMessage();
}