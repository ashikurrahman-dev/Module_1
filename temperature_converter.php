<!-- Task 2: Temperature Converter

Design a PHP program called temperature_converter.php that converts temperatures between Celsius and Fahrenheit.

Provide a form where the user can input a temperature value and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature. -->





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        h2 {
            color: #333;
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
        }

        input[type="number"],
        select {
            padding: 5px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            width: 150px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }

        p {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Temperature Converter</h2>

        <form method="post">
            <label for="temperature">Enter Temperature:</label>
            <input type="number" name="temperature" required> <br>

            <label for="conversion">Conversion Direction:</label>
            <select name="conversion" required>
                <option value="c_to_f">Celsius to Fahrenheit</option>
                <option value="f_to_c">Fahrenheit to Celsius</option>
            </select><br>

            <input type="submit" value="Convert">
        </form>


        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = $_POST["temperature"];
            $conversion = $_POST["conversion"];
            $convertedTemperature = "";

            if ($conversion === "c_to_f") {
                $convertedTemperature = ($temperature * 9 / 5) + 32;
                echo "<p>$temperature °C is $convertedTemperature °F</p>";
            } elseif ($conversion === "f_to_c") {
                $convertedTemperature = ($temperature - 32) * 5 / 9;
                echo "<p>$temperature °F is $convertedTemperature °C</p>";
            }
        }

        ?>
    </div>
</body>

</html>