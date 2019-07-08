<html>
<head>
    <title>Using if...else</title>
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
                Using if...else
            </h2>
            <?php

            //Using if Example
            //Declaring and initializing a variable
            $num1 = 9;
            //Checking whether the value is 5 and above
            if ($num1>=5)
            {
                print "The value is 5 and above";
            }
            else
            {
                print "The value is below 5";
            }

            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>