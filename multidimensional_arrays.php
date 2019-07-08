<html>
<head>
    <title>Multidimensional Arrays Example</title>
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
                Multidimensional Arrays Example
            </h2>
            <?php

            $person = array(
                array(
                    "staff_id" => 1001,
                    "first_name" => "Jack",
                    "last_name" => "Mwangi",
                    "profession" => "Trainer / Software Developer",
                    "organization" => "eMobilis"
                ),
                array(
                    "staff_id" => 1002,
                    "first_name" => "Lilian",
                    "last_name" => "Njenga",
                    "profession" => "Marketing Manager",
                    "organization" => "Safaricom Ltd"
                ),
                array(
                    "staff_id" => 1003,
                    "first_name" => "Steve",
                    "last_name" => "Njoroge",
                    "profession" => "Support Staff",
                    "organization" => "NITA"
                ),
                array(
                    "staff_id" => 1004,
                    "first_name" => "Ashley",
                    "last_name" => "Wasonga",
                    "profession" => "Programmer",
                    "organization" => "Andela"
                )
            );
            //Results
            print "<b>The following are individual's company details : </b><br><br>";
            $count = 0;
            for ($count = 0; $count <= 3;$count ++)
            {
                print "<b>Staff ID : </b>" . $person[$count]["staff_id"] . "<br>";
                print "<b>First Name : </b>" . $person[$count]["first_name"] . "<br>";
                print "<b>Last Name : </b>" . $person[$count]["last_name"] . "<br>";
                print "<b>Profession : </b>" . $person[$count]["profession"] . "<br>";
                print "<b>Organization : </b>" . $person[$count]["organization"] . "<br><br>";
            }

            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>