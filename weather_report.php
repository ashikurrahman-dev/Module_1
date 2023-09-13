<!-- Task 5: Weather Report

Create a PHP script named weather_report.php that provides weather information based on temperature. Use a variable to store the temperature. Depending on the temperature range, display messages like "It's freezing!", "It's cool.", or "It's warm." -->

 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>

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
        <h2>Weather Report</h2>
        <form action="" method="post">
            <input type="number" name="temp" placeholder="Enter Your Temperature" required><br>
            <input type="submit" value="Click">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temp = $_POST["temp"];

            switch ($temp) {
                case $temp <= 2:
                    echo "<p>It's freezing!</p>";
                    break;
                case $temp <= 20:
                    echo "<p>It's cool.</p>";
                    break;
                default:
                    echo "<p> It's warm.</p>";
            }
        }
        ?>
    </div>
</body>

</html>