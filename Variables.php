<html>
<head>
    <title>Variables</title>
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
            <h2 class="text-center">Variables</h2>
            <?php

            //WORKING WITH VARIABLES
            /*
             * A variable is a temporary storage location
             * for storing data in the computer's memory.
             */
            //Declaring and Initializing Variables
            $num1 = 23;
            $num2 = 12.345;
            $num3 = 21312423;
            $letter = 'A';
            $full_names = "Jack Mwangi";
            //Results / Output
            print "<b>Integer Value : </b>" . $num1 . "<br>";
            print "<b>Decimal Value : </b>" . $num2 . "<br>";
            print "<b>Double Value : </b>" . $num3 . "<br>";
            print "<b>First Letter : </b>" . $letter . "<br>";
            print "<b>Full Names : </b>" . $full_names . "<br>";
            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>