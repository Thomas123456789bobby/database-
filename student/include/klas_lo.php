<?php
include "connectdb.php"; 

$sql = "SELECT * FROM klas"; 

$sth = $db->prepare($sql); 

$sth->execute(); 


while($klas = $sth->fetch()) { 

?>