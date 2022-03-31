<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library | Publisher</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
            <ul>
                <li class="lesft"><a href="./library.php" class="lesft">LIBRARY</a></li>
                <li><a href="./bookentry.php">Book Entry</a></li>
                <li><a href="#">Publisher Entry</a> </li>
                <li><a href="./lending.php">Lending</a> </li>
                <li><a href="./display.php">Show All</a></li>
                <li><a href="./search.php">Search Book</a></li>
                <li><a href="./about.php">About</a></li>

            </ul>
    </nav>
    <div class="heading">
            <h1>Publisher Entry</h1>
    </div>
    <div class="tabledesign">
    <form action="./publisher.php" method="post">
        <table>
            <tr>
                <td>Publisher Name</td>
                <td><input type="text" name="publisher_name" id="publisher_name"></td>
            </tr>
            <tr>
                <td>Book ID</td>
                <td><input type="text" name="book_id" id="book_id"></td>
            </tr>
            <tr>
                <td>Publisher ID</td>
                <td><input type="text" name="publisher_id" id="publisher_id"></td>
            </tr>
            <tr>
                <td>Publisher Address</td>
                <td><input type="text" name="publisher_add" id="publisher_add"></td>
            </tr>
            <tr>
                <td>Publisher Phone Number</td>
                <td><input type="text" name="publisher_phone" id="publisher_phone"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit" class="submitbutton"></td>
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
            // $sqlpublisher = "CREATE TABLE publisher (
            // pub_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            // book_id INT(6) UNSIGNED,
            // publishar_name VARCHAR(30) NOT NULL,
            // Publisher_Address VARCHAR(50) NOT NULL,
            // Publisher_Phone VARCHAR(15) NOT NULL,
            // FOREIGN KEY (book_id) REFERENCES book(book_id)
            // )";
            // if($conn->query($sqlpublisher)===TRUE){

            // }
        if($_POST){
            $publisher_name = $_POST['publisher_name'];
            $book_id = $_POST['book_id'];
            $publisher_id = $_POST['publisher_id'];
            $publisher_add = $_POST['publisher_add'];
            $publisher_phone = $_POST['publisher_phone'];
            $sql = "INSERT INTO publisher (publishar_name,book_id,pub_id,Publisher_Address,Publisher_Phone) VALUES ('$publisher_name','$book_id','$publisher_id','$publisher_add','$publisher_phone')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
            $conn->close();

    ?>
</body>
</html>