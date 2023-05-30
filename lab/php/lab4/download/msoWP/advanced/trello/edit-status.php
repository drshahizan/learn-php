<?php 
require_once "ProjectManagement.php";
$projectManagement = new ProjectManagement();

$status_id = $_GET["status_id"];
$task_id = $_GET["task_id"];

$result = $projectManagement->editTaskStatus($status_id, $task_id);
?>