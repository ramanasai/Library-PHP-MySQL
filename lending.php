<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library | Lending</title>
    <link rel="stylesheet" href="style.css">
    <?php

    ?>
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
                <li><a href="./about.php">About</a></li>

            </ul>
    </nav>
    <div class="heading">
            <h1>Lending Entry</h1>
    </div>
    <div class="tabledesign" >
        <form action="./lending.php" method="post">
            <table>
                <tr>
                    <td>Enter Card No</td>
                    <td><input type="text" name="card_no" id="card_no"></td>
                </tr>
                <tr>
                    <td>Enter Book Id</td>
                    <td><input type="text" name="book_id" id="book_id"></td>
                </tr>
                <tr>
                    <td>Enter Date Out</td>
                    <td><input type="datetime-local" name="date_out" id="date_out"></td>
                </tr>
                <tr>
                    <td>Enter Due Date</td>
                    <td><input type="datetime-local" name="due_date" id="due_date"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" class="submitbutton" value="Submit"></td>
                </tr>
            </table>
        </form>
    </div>
    <?php
            global $servername,$conn,$username,$password;
            $servername = "localhost";
            $username = "sairamana";
            $password = "qX-t_66]sfP?E-$";
            $conn = new mysqli($servername, $username, $password, "library");
            // $sqllending = "CREATE TABLE lending (
            // card_no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            // book_id INT(6) UNSIGNED,
            // date_out TIMESTAMP,
            // due_date DATE,
            // FOREIGN KEY (book_id) REFERENCES book(book_id)
            // )";
            // if($conn->query($sqllending)=== TRUE){

            // }else{

            // }
        if($_POST){
            $card_no = $_POST['card_no'];
            $book_id = $_POST['book_id'];
            $date_out = $_POST['date_out'];
            $due_date = $_POST['due_date'];
            $sql = "INSERT INTO lending (card_no, book_id, date_out, due_date) VALUES ('$card_no', '$book_id', '$date_out', '$due_date')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully\n";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
            $conn->close();

    ?>
</body>
</html>