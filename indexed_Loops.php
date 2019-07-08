<html>
<head>
    <title>Arrays and Loops</title>
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
            <h2 class="text-center">Arrays and Loops</h2>
            <?php

            //Declaring an indexed array using array() function
            $cars = array(
                "Nissan Diesel",
                "Isuzu",
                "Fighter FH",
                "Scania",
                "Actros");
            //Results
            print "<b>The following is a list of trucks : </b><br>";
            print "<ol>";
            $c = 0;
            //Using a loop to loop through an array
            for ($c = 0;$c <= 4;$c ++)
            {
                print "<li>" . $cars[$c] . "</li>";
            }
            print "</ol>";

            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>