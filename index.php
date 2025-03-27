<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    
<?php 
// echo "Hello World";

// $name = "John";
// $age = 25;

// echo "<h1>Hello, $name!</h1>";

// echo "You are $age years old.";
// ?>

<p>Hello , my name is <?php echo $name; ?> , and I am <?php echo $age; ?> years old  </p>  -->

<!-- predefined variables -->
<!-- is a varibale that exists inside a php code -->

<?php 
// echo $_SERVER["DOCUMENT_ROOT"];
// echo "<br>";
// echo $_SERVER["PHP_SELF"];

// echo "<br>";
// echo $_SERVER["SERVER_NAME"];

// echo "<br>";
// echo $_SERVER["REQUEST_METHOD"];
// echo "<br>";


// SUPER GLOBALS
// $_GET[""];
// $_REQUEST[""]; // for both get and post requests 
// $_FILES[""]; // for file uploads from google, pdfs, images etc
// $_SERVER[""]; // for server information
// $_COOKIE[""]; // for cookies
// $_SESSION[""]; // for sessions
// $_ENV[""]; // for environment variables

//OPERATORS IN PHP

//string operator
// $a = "Hello";
// $b = "World";
// $c = $a . $b;
// echo $c;

//arithmetic operators
// +, -, *, /, %, **

// $x = 10;
// $y = 5;
// $z = $x + $y;
// echo $z;

//assignment operators

// $a = 10;
// $b = 5;
// $a += $b;
// echo $a;

// comparison operators
// ==, !=, >, <, >=, <=





// ?>

<!-- </body> -->
<!-- </html> -->

<!-- HOW TO HANDLE DATA FROM A FORM -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form id="registrationForm" action="includes/formhandler.php" method="post">
        <h2>User Registration</h2>
        
        <div class="form-group">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required minlength="8">
        </div>
        
        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
        </div>
        
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}">
        </div>
        
        <div class="form-group">
            <label for="comments">Additional Comments:</label>
            <textarea id="comments" name="comments" rows="4"></textarea>
        </div>
        
        <div class="form-group">
            <label>
                <input type="checkbox" name="terms" required>
                I agree to the terms and conditions
            </label>
        </div>
        
        <button type="submit">Register</button>
    </form>
</body>
</html> 