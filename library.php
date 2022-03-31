<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Library | Home</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <nav>
            <ul>
                <li class="lesft"><a href="#" class="lesft">LIBRARY</a></li>
                <li><a href="./bookentry.php">Book Entry</a></li>
                <li><a href="./publisher.php">Publisher Entry</a> </li>
                <li><a href="./lending.php">Lending</a> </li>
                <li><a href="./display.php">Show All</a></li>
                <li><a href="./search.php">Search Book</a></li>
                <li><a href="./about.php">About</a></li>

            </ul>
        </nav>
        <p>
            This is a library Management System using PHP and MySQL from XAMPP.
            
        </p>
        <?php
            global $servername;
            $servername = "localhost";
            $username = "sairamana";
            $password = "qX-t_66]sfP?E-$";
            $conn = new mysqli($servername, $username, $password);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            else{
                echo "<p>MySQL Connected successfully</p>";
            }

            // Create database
            $sql = "CREATE DATABASE library";
            if ($conn->query($sql) === TRUE) {
                echo "Database created successfully\n";
            } else {
                echo "Error creating database: " . $conn->error;
            }
            $conn->close();

            $conn = new mysqli($servername, $username, $password, "library");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            else{
                echo "<p>Table Connected successfully</p><br />";
            }
            $conn->close();

        ?>
    </body>

</html>