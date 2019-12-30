<?php

date_default_timezone_set('America/Toronto');

// Get todays date in the proper format..
$d = new DateTime();
$df = date_format($d, 'Y-m-d');

// Connect to database..
include_once "oconn.php";
$task = $_POST['task'];

$sql = "INSERT INTO tasks (date, task) VALUES (?,?)";
$conn->prepare($sql)->execute([$df, $task]);

$query = $conn->prepare('SELECT task, date FROM tasks');
$query->execute();
$result = $query -> fetchAll();

if (count($result) == 2){
    $sql = "INSERT INTO completed (date) VALUES (?)";
    $conn->prepare($sql)->execute([$df]);
}

echo json_encode(['']);