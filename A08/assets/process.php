<?php
include("connect.php");

// Query for all personality islands
$personalityQuery = "SELECT * FROM islandsofpersonality";
$resultPersonality = executeQuery($personalityQuery);
?>
