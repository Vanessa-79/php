<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"])?>" method="post">
    <input type="number" name="num1" placeholder="Number 1">

    <select name="operator">
        <option value="add">+</option>
        <option value="subtraction">-</option>
        <option value="Multiply">*</option>
        <option value="division">/</option>


    </select>
    <input type="number" name="num2" placeholder="Number 2">
    <button>Calculate</button>

</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //sanitizing the form , grab data from inputs
    $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
    $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
    $operator = htmlspecialchars($_POST["operator"]);

    //errror handlers
    $errors = false;
    if(empty($num1) || empty($num2) || empty($operator)){
        echo "<p class='calc-error'>Please fill in all fields</p>";
        $errors = true;
    }

    if (!is_numeric($num1) || !is_numeric($num2)){
    echo "<p class='calc-error'>Please enter a valid number</p>";
    $errors = true;
}

    //calculate the numbers if no errors
    if (!$errors) {
        //calculate the numbers
        $result = 0;
        switch ($operator) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtraction":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "division":
                $result = $num1 / $num2;
                break;
            default:
            echo "<p class='calc-error'>Something went wrong</p>";
        }
        echo "<p class='calc-result'> Result = " . $result . "</p>";
    

    }

    
}


?>
</body>
</html>