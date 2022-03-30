<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .row{
            margin: auto;
            width: 80%;
            display: flex;
        }
        p{
            margin: auto;
        }
        .aboutme{
            margin: auto;
            width: 25%;
            background-color: #f0f9f1;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <nav>
            <ul>
                <li class="lesft"><a href="./library.php" class="lesft">LIBRARY</a></li>
                <li><a href="./bookentry.php">Book Entry</a></li>
                <li><a href="./publisher.php">Publisher Entry</a> </li>
                <li><a href="#">Lending</a> </li>
                <li><a href="./display.php">Show All</a></li>
                <li><a href="./search.php">Search Book</a></li>
                <li><a href="#">About</a></li>
            </ul>
    </nav>
    <h1>About Me</h1>
    <div class="aboutme">
        <div class="row">
            <h3>Name:</h3>
            <p>P B Sai Ramana</p>
        </div>
        <div class="row">
            <h3>Email:  </h3>
            <p>kingofkingsairamana@gmail.com</p>
        </div>
        <div class="row">
            <h3>Phone:</h3>
            <p>+91 70193 87428</p>
        </div>
        <div>
            <!-- Copy Rights -->
            <?php
                echo "<p>&copy; 2022-" . date("Y") . " All Rights Reserved</p>";
            ?>
        </div>
    </div>
</body>
</html>