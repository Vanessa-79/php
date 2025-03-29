<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $pwd = htmlspecialchars($_POST["pwd"]);

    try {
        require_once "../includes/dbh.inc.php";

        $query = "INSERT INTO users (username, email, pwd) VALUES (?, ?, ?);";
        //stmt is a prepared statement
        //prepared statement is a way to execute a query in a more secure way
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $email, $pwd]);

        $pdo = null; // Close the connection
        $stmt = null; // Close the statement
        header("Location: ../signup.php"); // Redirect to login page after successful registration

        die();

    } catch (PDOExeption $e) {
         die("Failed: " . $e->getMessage());
    }
   
}
else {
    header("Location: ../signup.php");
    
}