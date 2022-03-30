<!-- 
    Consider the following schema for a Library Database: 
book (book_id(PK) [Auto Increment], title [NOT NULL], author_name, pub_year) 
Optional [Do it later] 
publisher(pub_id(PK), book_id(FK), publishar_name [NOT NULL]) 
lending (card_no(PK) , book_id(FK),  date_out[TIMESTAMP], due_date [DATE]) 
 
a)  Create a library database using a php script.  
b)  Create 3 tables as mentioned above.  
c)  Use primary key and foreign key as mentioned. 
 -->

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
        echo "Connected successfully\n";
    }

    // Create database
    // $sql = "CREATE DATABASE library";
    // if ($conn->query($sql) === TRUE) {
    //     echo "Database created successfully\n";
    // } else {
    //     echo "Error creating database: " . $conn->error;
    // }
    // $conn->close();

    $conn = new mysqli($servername, $username, $password, "library");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        echo "Connected successfully\n";
    }

    $sqlbook = "CREATE TABLE book (
        book_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        title VARCHAR(30) NOT NULL,
        author_name VARCHAR(30),
        pub_year VARCHAR(30)
        )";
        
    if ($conn->query($sqlbook) === TRUE) {
        echo "Table book created successfully\n";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $sqlpublisher = "CREATE TABLE publisher (
        pub_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        book_id INT(6) UNSIGNED,
        publishar_name VARCHAR(30) NOT NULL,
        FOREIGN KEY (book_id) REFERENCES book(book_id)
        )";
    if ($conn->query($sqlpublisher) === TRUE) {
        echo "Table book created successfully\n";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $sqllending = "CREATE TABLE lending (
        card_no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        book_id INT(6) UNSIGNED,
        date_out TIMESTAMP,
        due_date DATE,
        FOREIGN KEY (book_id) REFERENCES book(book_id)
        )";
    
    if ($conn->query($sqllending) === TRUE) {
        echo "Table book created successfully\n";
    } else {
        echo "Error creating table: " . $conn->error;
    }
            $conn->close();

?>

