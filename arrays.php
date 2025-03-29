<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 

// $fruits = array("apple", "banana", "orange");
// $fruits = ["apple", "banana", "orange"];


// $fruits[] = "mango";
// echo $fruits[3];

$tasks = [
    "title" => "My First Task",
    "due" => "Today",
    "assigned_to" => "John Doe",
    
];

sort($tasks);
print_r($tasks);



?>
</body>
</html>