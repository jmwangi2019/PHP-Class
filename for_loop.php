<html>
<head>
    <title>for loop example</title>
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
                for loop example
            </h2>
            <?php

            //Declaring and initializing a counter
            $num1 = 1;
            //Using for loop to count numbers 1 to 10 in
            //ascending order
            for ($num1 = 2;$num1 <= 10;$num1 += 2)
            {
                print "<b>The count is : </b>" . $num1 . "<br>";
            }

            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>