<?php
$id = $_GET['id'];

include "connectdb.php";
$sql = "DELETE FROM student WHERE id = :id" ;
$stmt = $db->prepare($sql);
$stmt->execute(['id' => $id]);
header("Location:../index.php");
?>