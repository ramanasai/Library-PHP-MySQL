<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library | Display</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table{
            margin: auto;
            width: 50%;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            background-color: #f1f1c1;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th{
            background-color: #4CAF50;
            color: white;
            align-text: center;
        }
        .searchh{
            margin: auto;
            width: 50%;
        }
        .searchh input{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
    <?php
            global $servername,$conn,$username,$password;
            $servername = "localhost";
            $username = "sairamana";
            $password = "qX-t_66]sfP?E-$";
            $conn = new mysqli($servername, $username, $password, "library");
            // $conn ->close();
    ?>
</head>
<body>
    <nav>
            <ul>
                <li class="lesft"><a href="./library.php" class="lesft">LIBRARY</a></li>
                <li><a href="./bookentry.php">Book Entry</a></li>
                <li><a href="./publisher.php">Publisher Entry</a> </li>
                <li><a href="./lending.php">Lending</a> </li>
                <li><a href="#">Show All</a></li>
                <li><a href="./search.php">Book Search</a></li>
                <li><a href="./about.php">About</a></li>
            </ul>
    </nav>
    <h1>Displaying Book Entry</h1>
    <?php
        $sql = "SELECT * FROM book ORDER BY book_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table><tr><th>Book ID</th><th>Book Name</th><th>Author</th><th>Publisher</th><th>Price</th><th>Quantity</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["book_id"]."</td><td>".$row["title"]."</td><td>".$row["author_name"]."</td><td>".$row["pub_year"]."</td><td>".$row["price"]."</td><td>".$row["quantity"]."</td></tr>";
                echo "<br>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        // $conn->close();
    ?>
    <h1>Displaying Publisher Entry</h1>
    <?php
        $servername = "localhost";
        $username = "sairamana";
        $password = "qX-t_66]sfP?E-$";
        $conn = new mysqli($servername, $username, $password, "library");
        $sql = "SELECT * FROM publisher ORDER BY pub_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table><tr><th>Publisher ID</th><th>Publisher Name</th><th>Publisher Address</th><th>Publisher Phone</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["pub_id"]."</td><td>".$row["publishar_name"]."</td><td>".$row["book_id"]."</td><td>".$row["publishar_name"]."</td></tr>";
                echo "<br>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        // $conn->close();
    ?>
    <h1>Displaying Lending Entry</h1>
    <?php
        $servername = "localhost";
        $username = "sairamana";
        $password = "qX-t_66]sfP?E-$";
        $conn = new mysqli($servername, $username, $password, "library");
        $sql = "SELECT * FROM lending ORDER BY card_no";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table><tr><th>Lending ID</th><th>Book ID</th><th>Lending Date</th><th>Return Date</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["card_no"]."</td><td>".$row["book_id"]."</td><td>".$row["date_out"]."</td><td>".$row["due_date"]."</td></tr>";
                echo "<br>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
    ?>

</body>
</html>