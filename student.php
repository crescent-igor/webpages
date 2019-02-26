<html>
<body>
<?php
$conn=new mysqli("localhost","root","");
if ($conn->connect_error){
    die("Conncection Failed:".$conn->connect_error);
}
$sql="CREATE DATABASE testDB2";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
$conn=mysqli_connect("localhost","root","","testDB2");
$sql="CREATE Table student(regNo INT,name varchar(20),CGPA DOUBLE,email varchar(15));";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql="INSERT INTO `student` (`regNo`, `name`, `CGPA`, `email`) VALUES ('23424', 'Amrit', '8.8', 'amrit@vit.com');";
if ($conn->query($sql) === TRUE) {
    echo "Row inserted successfully";
} else {
    echo "Error inserting row: " . $conn->error;
}

$sql="INSERT INTO `student` (`regNo`, `name`, `CGPA`, `email`) VALUES ('23425', 'Tejsv', '9.8', 'tejsv@vit.com');";
if ($conn->query($sql) === TRUE) {
    echo "Row inserted successfully";
} else {
    echo "Error inserting row: " . $conn->error;
}

$sql="INSERT INTO `student` (`regNo`, `name`, `CGPA`, `email`) VALUES ('23426', 'Stith', '9.9', 'stith@vit.com');";
if ($conn->query($sql) === TRUE) {
    echo "Row inserted successfully";
} else {
    echo "Error inserting row: " . $conn->error;
}

$result = mysqli_query($success,"SELECT * from `student`");
$row = mysqli_num_rows($result);
echo $row;
$conn->close();
?>
</body>
</html>
