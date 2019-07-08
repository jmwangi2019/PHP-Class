<html>
<head>
    <title>Using if...else if...else</title>
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
                Using if...else if...else
            </h2>
            <?php

            $num1 = 89;
            if ($num1 >= 1 && $num1 <= 5)
            {
                print "The value ranges between 1 and 5";
            }
            else if ($num1 >= 6 && $num1 <= 10)
            {
                print "The value ranges between 6 and 10";
            }
            else if ($num1 >= 11 && $num1 <= 15)
            {
                print "The value ranges between 11 and 15";
            }
            else
            {
                print "Invalid Range";
            }

            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>