# Library-PHP-MySQL

## List of Pages
1. Book Entries 
2. Publisher
3. Lending 
4. Display
5. Search

Using CSS, HTML, PHP, MySQL from XAMPP.

Creating DATABASE in MYSQL Command
```
$sql = "CREATE DATABASE library";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
```
