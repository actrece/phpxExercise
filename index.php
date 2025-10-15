<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercises Collection</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff9e6;
            margin: 0;
            padding: 30px;
            color: #7b174a;
        }
        h1 {
            text-align: center;
            color: #7b174a;
            font-size: 2.8em;
            margin-bottom: 0.2em;
        }
        .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .section {
            background: white;
            border: 2px solid #f3a6c2;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .section h3 {
            color: #7b174a;
            margin-bottom: 10px;
        }
        .result {
            color: #b03a5b;
            line-height: 1.8;
        }
        form {
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input {
            margin-bottom: 10px;
            padding: 5px;
        }
    </style>
</head>
<body>

<h1>PHP Exercises Collection</h1>
<div class="container">

    <!-- 1. Introduce Yourself -->
    <div class="section">
        <h3>1. Introduce Yourself</h3>
        <form method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required><br>
            <label for="color">Favorite Color:</label>
            <input type="text" id="color" name="color" required><br>
            <input type="submit" name="submit_ex1" value="Submit">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex1'])) {
                $name = $_POST['name'];
                $age = $_POST['age'];
                $color = $_POST['color'];
                echo "Hi! I'm $name. I am $age years old and my favorite color is $color.";
            }
            ?>
        </div>
    </div>

    <!-- 2. Simple Math -->
    <div class="section">
        <h3>2. Simple Math</h3>
        <form method="POST">
            <label for="a">First Number (a):</label>
            <input type="number" id="a" name="a" required><br>
            <label for="b">Second Number (b):</label>
            <input type="number" id="b" name="b" required><br>
            <input type="submit" name="submit_ex2" value="Submit">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex2'])) {
                $a = $_POST['a'];
                $b = $_POST['b'];
                $sum = $a + $b;
                $diff = $a - $b;
                $prod = $a * $b;
                $quot = $a / $b;
                echo "Sum of $a and $b is $sum<br>";
                echo "Difference of $a and $b is $diff<br>";
                echo "Product of $a and $b is $prod<br>";
                echo "Quotient of $a and $b is " . round($quot, 2);
            }
            ?>
        </div>
    </div>

    <!-- 3. Area and Perimeter -->
    <div class="section">
        <h3>3. Area and Perimeter of a Rectangle</h3>
        <form method="POST">
            <label for="length">Length:</label>
            <input type="number" id="length" name="length" required><br>
            <label for="width">Width:</label>
            <input type="number" id="width" name="width" required><br>
            <input type="submit" name="submit_ex3" value="Submit">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex3'])) {
                $length = $_POST['length'];
                $width = $_POST['width'];
                $area = $length * $width;
                $perimeter = 2 * ($length + $width);
                echo "Area = $area<br>";
                echo "Perimeter = $perimeter";
            }
            ?>
        </div>
    </div>

    <!-- 4. Temperature Converter -->
    <div class="section">
        <h3>4. Temperature Converter</h3>
        <form method="POST">
            <label for="c">Celsius:</label>
            <input type="number" id="c" name="c" required><br>
            <input type="submit" name="submit_ex4" value="Submit">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex4'])) {
                $c = $_POST['c'];
                $f = ($c * 9 / 5) + 32;
                echo "$c °C = $f °F";
            }
            ?>
        </div>
    </div>

    <!-- 5. Swapping Variables -->
    <div class="section">
        <h3>5. Swapping Variables</h3>
        <form method="POST">
            <label for="x">First Value (x):</label>
            <input type="number" id="x" name="x" required><br>
            <label for="y">Second Value (y):</label>
            <input type="number" id="y" name="y" required><br>
            <input type="submit" name="submit_ex5" value="Submit">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex5'])) {
                $x = $_POST['x'];
                $y = $_POST['y'];
                $temp = $x;
                $x = $y;
                $y = $temp;
                echo "After swapping: x = $x, y = $y";
            }
            ?>
        </div>
    </div>

    <!-- 6. Salary Calculator -->
    <div class="section">
        <h3>6. Salary Calculator</h3>
        <form method="POST">
            <label for="salary">Salary:</label>
            <input type="number" id="salary" name="salary" required><br>
            <label for="allowance">Allowance:</label>
            <input type="number" id="allowance" name="allowance" required><br>
            <label for="deduction">Deduction:</label>
            <input type="number" id="deduction" name="deduction" required><br>
            <input type="submit" name="submit_ex6" value="Submit">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex6'])) {
                $salary = $_POST['salary'];
                $allowance = $_POST['allowance'];
                $deduction = $_POST['deduction'];
                $net = $salary + $allowance - $deduction;
                echo "Net Salary = ₱$net";
            }
            ?>
        </div>
    </div>

    <!-- 7. BMI Calculator -->
    <div class="section">
        <h3>7. BMI Calculator</h3>
        <form method="POST">
            <label for="weight">Weight (kg):</label>
            <input type="number" id="weight" name="weight" required><br>
            <label for="height">Height (m):</label>
            <input type="number" id="height" name="height" required><br>
            <input type="submit" name="submit_ex7" value="Submit">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex7'])) {
                $weight = $_POST['weight'];
                $height = $_POST['height'];
                $bmi = $weight / ($height * $height);
                echo "Your BMI is " . round($bmi, 2);
            }
            ?>
        </div>
    </div>

    <!-- 8. String Manipulation -->
    <div class="section">
        <h3>8. String Manipulation</h3>
        <form method="POST">
            <label for="text">Enter a sentence:</label>
            <input type="text" id="text" name="text" required><br>
            <input type="submit" name="submit_ex8" value="Submit">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex8'])) {
                $text = $_POST['text'];
                echo "Sentence: $text<br>";
                echo "Characters: " . strlen($text) . "<br>";
                echo "Words: " . str_word_count($text) . "<br>";
                echo "Uppercase: " . strtoupper($text) . "<br>";
                echo "Lowercase: " . strtolower($text);
            }
            ?>
        </div>
    </div>

    <!-- 9. Bank Account -->
    <div class="section">
        <h3>9. Bank Account Simulation</h3>
        <form method="POST">
            <label for="balance">Initial Balance:</label>
            <input type="number" id="balance" name="balance" required><br>
            <label for="deposit">Deposit:</label>
            <input type="number" id="deposit" name="deposit" required><br>
            <label for="withdraw">Withdraw:</label>
            <input type="number" id="withdraw" name="withdraw" required><br>
            <input type="submit" name="submit_ex9" value="Submit">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex9'])) {
                $balance = $_POST['balance'];
                $deposit = $_POST['deposit'];
                $withdraw = $_POST['withdraw'];
                $newBalance = $balance + $deposit - $withdraw;
                echo "Final Balance = ₱$newBalance";
            }
            ?>
        </div>
    </div>

    <!-- 10. Grading System -->
    <div class="section">
        <h3>10. Simple Grading System</h3>
        <form method="POST">
            <label for="math">Math Score:</label>
            <input type="number" id="math" name="math" required><br>
            <label for="english">English Score:</label>
            <input type="number" id="english" name="english" required><br>
            <label for="science">Science Score:</label>
            <input type="number" id="science" name="science" required><br>
            <input type="submit" name="submit_ex10" value="Submit">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex10'])) {
                $math = $_POST['math'];
                $english = $_POST['english'];
                $science = $_POST['science'];
                $average = ($math + $english + $science) / 3;
                if ($average >= 90) {
                    $grade = "A";
                } elseif ($average >= 80) {
                    $grade = "B";
                } elseif ($average >= 70) {
                    $grade = "C";
                } else {
                    $grade = "D";
                }
                echo "Average: " . round($average, 2) . "<br>";
                echo "Grade: $grade";
            }
            ?>
        </div>
    </div>

    <!-- 11. Currency Converter -->
    <div class="section">
        <h3>11. Currency Converter</h3>
        <form method="POST">
            <label for="peso">Amount in Peso:</label>
            <input type="number" id="peso" name="peso" required><br>
            <input type="submit" name="submit_ex11" value="Submit">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex11'])) {
                $peso = $_POST['peso'];
                $usd = 0.018;
                $eur = 0.016;
                $jpy = 2.7;
                $toUsd = $peso * $usd;
                $toEur = $peso * $eur;
                $toJpy = $peso * $jpy;
                echo "₱$peso = USD $toUsd | EUR $toEur | JPY $toJpy";
            }
            ?>
        </div>
    </div>

    <!-- 12. Travel Cost Estimator -->
    <div class="section">
        <h3>12. Travel Cost Estimator</h3>
        <form method="POST">
            <label for="distance">Distance (km):</label>
            <input type="number" id="distance" name="distance" required><br>
            <label for="fuel">Fuel Efficiency (km/liter):</label>
            <input type="number" id="fuel" name="fuel" required><br>
            <label for="price">Fuel Price (per liter):</label>
            <input type="number" id="price" name="price" required><br>
            <input type="submit" name="submit_ex12" value="Submit">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex12'])) {
                $distance = $_POST['distance'];
                $fuel = $_POST['fuel'];
                $price = $_POST['price'];
                $needed = $distance / $fuel;
                $cost = $needed * $price;
                echo "Estimated Travel Cost = ₱" . round($cost, 2);
            }
            ?>
        </div>
    </div>

</div>
</body>
</html>
