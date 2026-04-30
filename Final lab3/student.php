<?php
header("Content-Type: application/json");

$students = array(
    array("name" => "Rakib Hossain", "id" => "20-12345-1", "department" => "CSE", "cgpa" => 3.85),
    array("name" => "Nusrat Jahan", "id" => "20-12346-1", "department" => "EEE", "cgpa" => 3.75),
    array("name" => "Tanvir Ahmed", "id" => "20-12347-1", "department" => "BBA", "cgpa" => 3.65)
);

echo json_encode($students);
?>