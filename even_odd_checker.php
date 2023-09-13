<!-- Task 4: Even or Odd Checker


Build a PHP program called even_odd_checker.php that checks whether a given number is even or odd. Provide an input field where the user can enter a number. Display a message indicating whether the number is even or odd. -->


 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Or odd</title>
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
            width: 80%;
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
        <h2>Even Or Odd Checker</h2>
        <form action="" method="post">
            <input type="number" name="num" placeholder="Enter Your Number"><br>

            <input type="submit" value="CHECK">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = $_POST["num"];

            $result = ($num % 2 == 0) ? "$num is an Even Number" : "$num is an Odd Number";
            echo "<p>Result:  $result</p>";
        }
        ?>

    </div>
</body>

</html>