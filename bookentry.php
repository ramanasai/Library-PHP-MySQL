<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Library | Book Entry</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <nav>
            <ul>
                <li class="lesft"><a href="./library.php" class="lesft">LIBRARY</a></li>
                <li><a href="#">Book Entry</a></li>
                <li><a href="./publisher.php">Publisher Entry</a> </li>
                <li><a href="./lending.php">Lending</a> </li>
                <li><a href="./display.php">Show All</a></li>
                <li><a href="./search.php">Search Book</a></li>
                <li><a href="./about.php">About</a></li>

            </ul>
        </nav>
        <?php
            
            // if ($conn->query($sqlbook) === TRUE) {
            //     echo "Table book created successfully\n";
            // } else {
            //     echo "Error creating table: " . $conn->error;
            // }
        ?>
        <div class="heading">
            <h1>Book Entry</h1>
        </div>
        <div class="tabledesign">
            <form  method="post" action="./bookentry.php">
                <table>
                    <tr>
                        <td>Enter Book ID</td>
                        <td><input type="text" name="book_id" id="book_id" name="bookid"></td>
                    </tr>
                    <tr>
                        <td>Enter Book Name</td>
                        <td><input type="text" name="book_name" id="book_name" name="bookname"></td>
                    </tr>
                    <tr>
                        <td>Enter Author Name</td>
                        <td><input type="text" name="author_name" id="author_name" name="authorname"></td>
                    </tr>
                    <tr>
                        <td>Enter Publisher Year</td>
                        <td><input type="text" name="publisher_year" id="publisher_year" name="publisheryear"></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td><input type="text" name="price" id="price" name="price"></td>
                    </tr>
                    <tr>
                        <td>
                            Quantity
                        </td>
                        <td>
                            <input type="text" name="quantity" id="quantity" name="quantity">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="submitbutton" type="submit" name="submit" value="Submit" >
                        </td>
                        <td>
                            <input class="submitbutton" type="reset" value="Reset" id="reset">
                        </td>
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
                // $sqlbook = "CREATE TABLE book (
                // book_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                // title VARCHAR(30) NOT NULL,
                // author_name VARCHAR(30),
                // pub_year VARCHAR(30),
                // price VARCHAR(30),
                // quantity VARCHAR(30)
                // )";

                // if ($conn->query($sqlbook)===TRUE){
                //     echo " ";
                // }
                // else{
                //     echo " ";
                // }
                // $bookid = $bookname = $authorname = $publisheryear = "";
                if($_POST){
                    $book_id = $_POST['book_id'];
                    $book_name = $_POST['book_name'];
                    $author_name = $_POST['author_name'];
                    $publisher_year = $_POST['publisher_year'];
                    $price = $_POST['price'];
                    $quantity = $_POST['quantity'];
                    $sql = "INSERT INTO book (book_id,title,author_name,pub_year,price,quantity) VALUES ('$book_id','$book_name','$author_name','$publisher_year','$price','$quantity')";
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