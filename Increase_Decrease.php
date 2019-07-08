<html>
<head>
    <title>Increase and Decrease Operators</title>
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
                Increase and Decrease Operators
            </h2>
            <?php

            //Increase and Decrease Operators
            /*
             * The increase operator (++) adds a value by 1;
             * The decrease operator (--) reduces a value by 1.
             */
            //Declaring and Initializing Variables
            $num1 = 23;
            $num2 = 12;
            //Computations / Processing
            $num1++;
            $num2--;
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