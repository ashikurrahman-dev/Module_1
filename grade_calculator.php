<!-- Task 3: Grade Calculator

Develop a PHP script named grade_calculator.php that computes the average of three test scores and determines the corresponding letter grade. 

Create a form where the user can input three test scores. Calculate the average and display it along with the corresponding grade (A, B, C, D, F). -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        body {

            background-color: #f0f0f0;
            margin: 100px auto;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            display: inline-block;
        }

        label {
            font-weight: bold;
            font-size: 18px;
            margin: 22px 0 !;
        }

        input[ type="number"] {
            width: 80%;
            padding: 10px;
            font-size: 22px;
            margin: 15px 0;
        }

        input[type="submit"] {
            padding: 6px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 3px;
            background-color: rgba(255, 0, 0, 0.178);

        }

        p {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <h2>Grade Calculator</h2>
    <form action="" method="post">
        <label for="score1">Test Score 1:</label>
        <input type="number" name="score1" placeholder="Number 1" required><br>

        <label for="score2">Test Score 2: </label>
        <input type="number" name="score2" placeholder="Number 2" required><br>

        <label for="score3">Test Score 3: </label>
        <input type="number" name="score3" placeholder="Number 3" required><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];

        // Average score
        $average = ($score1 + $score2 + $score3) / 3;
        // Grade score
        $grade = '';

        if ($average >= 80) {
            $grade = 'A';
        } elseif ($average >= 70) {
            $grade = 'B';
        } elseif ($average >= 60) {
            $grade = 'C';
        } elseif ($average >= 50) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }



        echo "<p>Average Score: $average</p>";
        echo "<p>Letter Grade: $grade</p>";

    }
    ?>


</body>

</html>