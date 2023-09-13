<!-- Task 6: Comparison Tool

Develop a PHP tool named comparison_tool.php that compares two numbers and displays the larger one using the ternary operator. 

Create a form where the user can input two numbers. Use the ternary operator to determine the larger number and display the result. -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
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

        input[type="submit"] {
            padding: 5px 8px;
            font-size: 18px;
            background-color: rgba(255, 0, 0, 0.178);
            cursor: pointer;
            margin-bottom: 10px;
            border-radius: 4px;
        }

        p {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Comparison Tool</h2>
        <form action="" method="post">
            <input type="number" name="num1" placeholder="First Number" required><br>
            <input type="number" name="num2" placeholder="Second Number" required><br>
            <input type="submit" value="Compare"><br>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            $result = ($num1 > $num2) ? "$num1" : "$num2";
            echo "<p>The Larger Number Is $result</p>";

        }
        ?>
    </div>
</body>

</html>