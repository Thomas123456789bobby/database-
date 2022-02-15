<?php
include "connectdb.php"; 

$sql = "SELECT * FROM student WHERE id=:id"; 

 

$params = array( 

    ":id" => $id
     

); 

 

try { 

    $sth = $db->prepare($sql); 

    $sth->execute($params); 

    $student = $sth->fetch(PDO::FETCH_ASSOC); 

} catch (PDOException $e) { 

    echo $e->getMessage(); 

} 

?>




