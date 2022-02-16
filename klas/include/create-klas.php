<?php
include "connectdb.php";
$code = $_POST['code'];
$vestiging = $_POST['vestiging'];
$sectie = $_POST['sectie'];
$cohort = $_POST['cohort'];



$sql = "INSERT INTO klas(code, vestiging, sectie, cohort)VALUES (:code, :vestiging, :sectie, :cohort)";
$stmt = $db->prepare($sql);
$stmt->execute([':code' => $code, ':vestiging' => $vestiging , ':sectie' => $sectie, ':cohort' => $cohort,]);
echo "Data is toegevoegd";
header("Location:../klas.php");
?>