<?php
//HOW TO HANDLE DATA FROM A FORM

//using condition
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = htmlspecialchars($_POST["fullName"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $dob = htmlspecialchars($_POST["dob"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $phonenumber = htmlspecialchars($_POST["phone"]);
    $comment = htmlspecialchars($_POST["comments"]);
    
    
    echo "this the data that the user submitted";
    echo "<br>";
    echo $fullName;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $password;
    echo "<br>";
    echo $dob;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $phonenumber;
    echo "<br>";
    echo $comment;
    echo "<br>";
}