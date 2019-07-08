<html>
<head>
    <title>Terminating a Loop</title>
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
                Terminating a loop
            </h2>
            <?php

            $num1 = 1;
            for ($num1 = 1;$num1 <= 10;$num1 ++)
            {
                print "<b>The count is : </b>" . $num1 . "<br>";
                if ($num1 == 6)
                {
                    break;
                }
            }

            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>