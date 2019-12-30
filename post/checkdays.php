<?php
date_default_timezone_set('America/Toronto');

// Get todays date in the proper format..
$d = new DateTime();
$df = date_format($d, 'Y-m-d');

// Connect to database..
include_once "oconn.php";

// Get all completed table rows..
$query = $conn->prepare('SELECT date FROM completed');
$query->execute();
$result = $query -> fetchAll();

// Store them in completed array..
$completed = [];
foreach( $result as $row ) {
    array_push($completed, $row['date']);
}

// Get tasks that have been completed today..
$query = $conn->prepare('SELECT task, date FROM tasks');
$query->execute();

$result = $query -> fetchAll();

$todays_tasks = [];
if (count($result) !== 0){
    foreach( $result as $row ) {

        // Clear table of old tasks
        if($row['date'] !== $df){
            $query = $conn->prepare('DELETE FROM tasks');
            $query->execute();
            break;
        }

       array_push($todays_tasks, $row['task']);

    }
}

// send data back to javascript..
echo json_encode(['completed_days' => $completed, 'today_tasks' => $todays_tasks]);