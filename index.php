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
</style>
</head>
<body>

<h1>PHP Exercises Collection</h1>
<div class="container">

    <!-- 1. Introduce Yourself -->
    <div class="section">
        <h3>1. Introduce Yourself</h3>
        <div class="result">
            <?php
            $name = "Actrece Angeline V. Delos Santos";
            $age = 20;
            $color = "pink";
            echo "Hi! I'm $name. I am $age years old and my favorite color is $color.";
            ?>
        </div>
    </div>

    <!-- 2. Simple Math -->
    <div class="section">
        <h3>2. Simple Math</h3>
        <div class="result">
            <?php
            $a = 10;
            $b = 6;
            $sum = $a + $b;
            $diff = $a - $b;
            $prod = $a * $b;
            $quot = $a / $b;
            echo "Sum of $a and $b is $sum<br>";
            echo "Difference of $a and $b is $diff<br>";
            echo "Product of $a and $b is $prod<br>";
            echo "Quotient of $a and $b is " . round($quot, 2);
            ?>
        </div>
    </div>

    <!-- 3. Area and Perimeter -->
    <div class="section">
        <h3>3. Area and Perimeter of a Rectangle</h3>
        <div class="result">
            <?php
            $length = 5;
            $width = 4;
            $area = $length * $width;
            $perimeter = 2 * ($length + $width);
            echo "Area = $area<br>";
            echo "Perimeter = $perimeter";
            ?>
        </div>
    </div>

    <!-- 4. Temperature Converter -->
    <div class="section">
        <h3>4. Temperature Converter</h3>
        <div class="result">
            <?php
            $c = 60;
            $f = ($c * 9 / 5) + 32;
            echo "$c °C = $f °F";
            ?>
        </div>
    </div>

    <!-- 5. Swapping Variables -->
    <div class="section">
        <h3>5. Swapping Variables</h3>
        <div class="result">
            <?php
            $x = 5;
            $y = 4;
            $temp = $x;
            $x = $y;
            $y = $temp;
            echo "After swapping: x = $x, y = $y";
            ?>
        </div>
    </div>

    <!-- 6. Salary Calculator -->
    <div class="section">
        <h3>6. Salary Calculator</h3>
        <div class="result">
            <?php
            $salary = 1000;
            $allowance = 50;
            $deduction = 20;
            $net = $salary + $allowance - $deduction;
            echo "Net Salary = ₱$net";
            ?>
        </div>
    </div>

    <!-- 7. BMI Calculator -->
    <div class="section">
        <h3>7. BMI Calculator</h3>
        <div class="result">
            <?php
            $weight = 70;
            $height = 1.75;
            $bmi = $weight / ($height * $height);
            echo "Your BMI is " . round($bmi, 2);
            ?>
        </div>
    </div>

    <!-- 8. String Manipulation -->
    <div class="section">
        <h3>8. String Manipulation</h3>
        <div class="result">
            <?php
            $text = "PHP is a powerful scripting language.";
            echo "Sentence: $text<br>";
            echo "Characters: " . strlen($text) . "<br>";
            echo "Words: " . str_word_count($text) . "<br>";
            echo "Uppercase: " . strtoupper($text) . "<br>";
            echo "Lowercase: " . strtolower($text);
            ?>
        </div>
    </div>

    <!-- 9. Bank Account -->
    <div class="section">
        <h3>9. Bank Account Simulation</h3>
        <div class="result">
            <?php
            $balance = 1000;
            $deposit = 500;
            $withdraw = 200;
            $newBalance = $balance + $deposit - $withdraw;
            echo "Final Balance = ₱$newBalance";
            ?>
        </div>
    </div>

    <!-- 10. Grading System -->
    <div class="section">
        <h3>10. Simple Grading System</h3>
        <div class="result">
            <?php
            $math = 85;
            $english = 90;
            $science = 88;
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
            ?>
        </div>
    </div>

    <!-- 11. Currency Converter -->
    <div class="section">
        <h3>11. Currency Converter</h3>
        <div class="result">
            <?php
            $peso = 1000;
            $usd = 0.018;
            $eur = 0.016;
            $jpy = 2.7;

            $toUsd = $peso * $usd;
            $toEur = $peso * $eur;
            $toJpy = $peso * $jpy;

            echo "₱$peso = USD $toUsd | EUR $toEur | JPY $toJpy";
            ?>
        </div>
    </div>

    <!-- 12. Travel Cost Estimator -->
    <div class="section">
        <h3>12. Travel Cost Estimator</h3>
        <div class="result">
            <?php
            $distance = 150;
            $fuel = 15;
            $price = 65;

            $needed = $distance / $fuel;
            $cost = $needed * $price;

            echo "Estimated Travel Cost = ₱" . round($cost, 2);
            ?>
        </div>
    </div>

</div>
</body>
</html>
