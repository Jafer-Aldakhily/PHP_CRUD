<?php
require_once './db.php';

$id = $_GET["id"];

$sql = "delete from cars where CarID = :id";
$statment = $conn->prepare($sql);
$statment->bindParam(":id", $id, PDO::PARAM_STR);
$statment->execute();

header("Location: index.php");
