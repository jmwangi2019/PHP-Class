<html>
<head>
    <title>Indexed Arrays One</title>
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
            <h2 class="text-center">Indexed Arrays One</h2>
            <?php

            //Declaring an indexed array using array() function
            $cars = array(
                "Range Rover",
                "Land Cruiser",
                "Prado",
                "Ford Ranger",
                "Toyota Hilux");
            //Results
            print "<b>The following is a list of cars : </b><br>";
            print "<ol>";
            print "<li>" . $cars[0] . "</li>";
            print "<li>" . $cars[1] . "</li>";
            print "<li>" . $cars[2] . "</li>";
            print "<li>" . $cars[3] . "</li>";
            print "<li>" . $cars[4] . "</li>";
            print "</ol>";

            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>