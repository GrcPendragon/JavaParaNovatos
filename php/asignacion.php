<?php 

include 'db.php';
$db = new DB();

$query = $db->connect()->prepare('INSERT INTO Temas(id_Tema, no_Tema, desc_Tema, puntosTotales, id_Modulo) VALUES (null, 5, "Implementación de Polimorfismo.", 20, 5 )');
$query->execute();

echo "Ejecutado";
?>