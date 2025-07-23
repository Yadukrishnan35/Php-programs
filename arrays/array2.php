<?php
    $students = [
        ["name" => "john", "marks"=>90],
        ["name" => "Ram", "marks"=>70],
        ["name" => "sanal","marks"=>70]
    ];

    foreach ($students as $student) {
        echo $student["name"] . " has marks " . $student["marks"] . "</br>";
    }
?>