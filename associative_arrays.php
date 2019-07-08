<html>
<head>
    <title>Associative Arrays Example</title>
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
                Associative Arrays Example
            </h2>
            <?php

            $person = array(
                "staff_id" => 1001,
                "first_name" => "Jack",
                "last_name" => "Mwangi",
                "profession" => "Trainer / Software Developer",
                "organization" => "eMobilis"
            );
            //Results
            print "<b>The following are a staff's company details : </b><br><br>";
            print "<b>Staff ID : </b>" . $person["staff_id"] . "<br>";
            print "<b>First Name : </b>" . $person["first_name"] . "<br>";
            print "<b>Last Name : </b>" . $person["last_name"] . "<br>";
            print "<b>Profession : </b>" . $person["profession"] . "<br>";
            print "<b>Organization : </b>" . $person["organization"] . "<br>";
            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>