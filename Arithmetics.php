<html>
<head>
    <title>Arithmetic Operators</title>
    <link rel="icon" href="images/stLogo.jpeg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h2 class="text-center">
                Arithmetic Operators
            </h2>
            <?php

            //Declaring and Initializing Variables
            $num1 = 23;
            $num2 = 12;
            //Computations / Processing
            $sum = $num1 + $num2;
            $prod = $num1 * $num2;
            $diff = $num1 - $num2;
            $divsn = $num1 / $num2;
            $remdr = $num1 % $num2;
            //Results
            print "<b>First Number : </b>" . $num1 . "<br>";
            print "<b>Second Number : </b>" . $num2 . "<br><br>";
            print "<b>Sum : </b>" . $sum . "<br>";
            print "<b>Product : </b>" . $prod . "<br>";
            print "<b>Difference : </b>" . $diff . "<br>";
            print "<b>Division : </b>" . $divsn . "<br>";
            print "<b>Remainder : </b>" . $remdr . "<br>";

            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>