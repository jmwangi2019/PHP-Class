<html>
<head>
    <title>Compound Assignment Operators</title>
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
                Compound Assignment Operators
            </h2>
            <?php

            //Declaring and Initializing Variables
            $num1 = 23;
            $num2 = 12;
            /*
             * Examples of Compound Assignment Operators
             * include : +=, -=, *=, /= and %=.
             * E.g. a+=b; is the same as a=a+b;
             * Given that a=2 and b=3, find a.
             */
            /*
             * Using Compound Assignment Operators to
             * initialize variables and perform
             * computations at the same time.
             */
            $num1 += $num2;
            $num2 -= $num1;
            //Results
            print "<b>Result 1 : </b>" . $num1 . "<br>";
            print "<b>Result 2 : </b>" . $num2 . "<br>";

            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>