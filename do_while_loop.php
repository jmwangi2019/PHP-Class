<html>
<head>
    <title>do...while loop example</title>
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
                do...while loop example
            </h2>
            <?php

            //Declaring and initializing a counter variable
            $num1 = 90;
            /*
             * Using do...while loop to count numbers 90 to
             * 110 in ascending order
             */
            do{
                print "<b>The count is : </b>" . $num1 . "<br>";
                $num1 += 2;
            } while ($num1 <= 110);

            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>