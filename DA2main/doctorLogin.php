<html>

<head>
    <title>
        Patient Login
    </title>

</head>

<body>
    <h1>Welcome to our Hospital Management system</h1>
    <h2>Doctor login</h2>
    <form action="doctorLogin.php" method="post">
        Doctor id:<input type="number" name="did"><br>
        Doctor name:<input type="text" name="dname"><br>
        <input type="submit" value="Login">
    </form>
    <?php
    session_start();
    $_SESSION["dlogin"] = 0;
    $docid = $_POST["did"];
    $docname = $_POST["dname"];
    $conn = mysqli_connect("localhost", "root", "toor", "iwpbase");
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }

    // echo 'Connected successfully';

    // $selectDoctor = "Select * from doctor";
    // $result = $conn->query($selectDoctor);
    // if ($result->num_rows > 0) {
    //     while ($row = $result->fetch_assoc()) {
    //         echo  " - Name: " . $row["name"] . " - Specialization: " . $row["spec"] . "- Fee:" . $row["fee"] . "<br>";
    //     }
    // }

    $selectDoctor = "Select * from doctor";
    $result = $conn->query($selectDoctor);
    $flag = 0;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($docid == $row["did"]) {
                if ($docname == $row["name"]) {

                    $flag = 1;
                    $_SESSION["did"] = $docid;
                    $_SESSION["dlogin"] = 1;
                    $_SESSION["dname"] = $docname;
                    $_SESSION["dspec"] = $row["spec"];
                    $_SESSION["dfee"] = $row["fee"];
                    header('Location: doctor.php');
                }
            }
        }
    }
    if ($docid) {
        if ($flag == 0) {
            echo "Login Failed, Please check id and name";
            $_SESSION["plogin"] = 0;
            session_destroy();
        }
    }

    mysqli_close($conn);


    ?>
</body>

</html> 