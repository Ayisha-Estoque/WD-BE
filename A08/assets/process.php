<?php
include("connect.php");

$personalityQuery = "SELECT * FROM islandsofpersonality";
$resultPersonality = executeQuery($personalityQuery);

$queryContents = "SELECT * FROM islandcontents";
$resultContents = executeQuery($queryContents);

$islandContents = [];
while ($islandContentsRow = mysqli_fetch_assoc($resultContents)) {
    $islandContents[$islandContentsRow['islandOfPersonalityID']][] = $islandContentsRow;
}
?>