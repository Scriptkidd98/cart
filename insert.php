// this script inserts the product details into the sql database
<?php
$servername = "localhost";
$username = "root";

// connects to the database created above
$conn = new mysqli($servername, $username, "", "test");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// inserts the verified data into the database  
$sql = "INSERT INTO productstable (productname, productid, imagelink, price) 
VALUES ('shirt', '1', 'img/shop/product_back_11.jpg', '$100')";
// verifies the insertion of the data
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
