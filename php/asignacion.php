<?php 
include 'db.php';

$db = new DB();
$query = $db->consulta('SELECT id_Modulo FROM modulos');

foreach($query as $row)
    echo $row[0] . '<br/>';
?>