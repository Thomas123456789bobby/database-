<?php
$id = $_GET['id'];

include "connectdb.php";
$sql = "DELETE FROM klas WHERE id = :id" ;
$stmt = $db->prepare($sql);
$stmt->execute(['id' => $id]);
header("Location:../klas.php");
?>