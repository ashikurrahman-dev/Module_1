<!-- Task 7: Simple Calculator

Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations. Provide input fields for two numbers and a dropdown to select the operation (addition, subtraction, multiplication, division). Display the result of the chosen operation. -->





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            background-color: #f0f0f0;
            text-align: center;
        }

        .container {
            width: 20%;
            height: auto;
            margin: 200px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);

        }

        input[type="number"] {
            width: 84%;
            padding: 5px 10px;
            font-size: 22px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        select {
            width: 160px;
            padding: 5px 8px;
            font-size: 18px;
            border-radius: 4px;
            margin-right: 8px;

        }

        input[type="submit"] {
            padding: 5px 8px;
            font-size: 18px;
            background-color: rgba(255, 0, 0, 0.178);
            cursor: pointer;
            margin-bottom: 10px;
            border-radius: 4px;
        }

        p {
            font-size: 22px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Simple Calculator</h2>
        <form action="" method="post">
            <input type="number" name="num1" placeholder="First Number" required><br>
            <input type="number" name="num2" placeholder="First Number" required><br>
            <select name="operator" id="" required>
                <option value="add">Addition (+)</option>
                <option value="subtract">Subtraction (-)</option>
                <option value="multiply">Multiplication (*)</option>
                <option value="divide">Division (/)</option>
            </select>
            <input type="submit" value"Calculate">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operator"];

            switch ($operation) {
                case "add":
                    $result = $num1 + $num2;
                    echo "<p>Result: $result</p>";

                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    echo "<p>Result: $result</p>";

                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    echo "<p>Result: $result</p>";

                    break;
                case "divide":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                        echo "<p>Result: $result</p>";
                    } else {
                        echo "Cannot Divide By Zero";
                    }

                    break;
                default:
                    echo "Invalid Number";
            }
        }
        ?>


    </div>
</body>

</html>