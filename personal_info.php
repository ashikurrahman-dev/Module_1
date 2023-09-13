<!-- 
Task 1: Personal Information Page

Create a PHP file named personal_info.php that displays your personal information using variables and the echo statement. Include your name, age, country, and a brief introduction. -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Info</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 600px;
            height: auto;
            margin: 30px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);

        }

        h2 {
            text-align: center;
            margin: 16px 0;

        }

        h3 {
            padding: 0;
            margin: 5px 0;
            font-size: 22px;
        }

        p {
            font-size: 18px;
            line-height: 1.3;
        }
    </style>

</head>

<body>
    <div class="container">
        <h2>My Personal Information </h2>

        <?php
        $name = "Ashikur Rahman";
        $age = 19;
        $country = "Bangladesh";
        $bio = " <strong>Introduction:</strong> <br> 
            Hello, I'm $name. I'm $age years old and I live in the Pabna, Bangladesh.
            I am a student currently studying at Pabna Polytechnic Institute in Pabna. My area of specialization is Construction.
            <br> <br>
            <strong>Future Goals:</strong>  <br>
            My ambition is to specialize in web development, particularly in PHP and the Laravel framework. I am excited about the endless possibilities that web development offers, and I am dedicated to staying updated with the latest industry trends and best practices.
            <br>
            I believe in the power of technology to create meaningful and innovative solutions, and I am eager to contribute to the world of web development. I look forward to the exciting journey ahead as I work towards becoming a skilled PHP and Laravel developer.";


        echo "<h3> Name:  $name </h3>";
        echo "<h3>Age:  $age </h3>";
        echo "<h3>Country:  $country </h3>";
        echo "<p> $bio</p> ";
        ?>
    </div>
</body>

</html>