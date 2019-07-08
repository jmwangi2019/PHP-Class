<html>
<head>
    <title>Using switch</title>
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
                Using switch
            </h2>
            <?php

            $choice = 'a';
            switch ($choice)
            {
                case 'A':
                    print "Apples";
                    break;
                case 'B':
                    print "Bananas";
                    break;
                case 'C':
                    print "Mangoes";
                    break;
                case 'D':
                    print "Oranges";
                    break;
                default:
                    print "Invalid Choice";
                    break;
            }

            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>