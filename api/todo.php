<?php
header("Content-Type: application/json");
echo json_encode([
    "userId" => 1,
    "id" => 1,
    "title" => "xampp todo",
    "completed" => false
]);