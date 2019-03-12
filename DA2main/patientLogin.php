<html>

<head>
    <title>
        Patient Login
    </title>

</head>

<body>
    <h1>Welcome to our Hospital Management system</h1>
    <h2>Patient login</h2>
    <form action="patientLogin.php" method="post">
        patient id:<input type="number" name="pid"><br>
        patient name:<input type="text" name="pname"><br>
        <input type="submit" value="Login">
    </form>
    <?php
    session_start();
    $_SESSION["plogin"] = 0;
    $patientid = $_POST["pid"];
    $pname = $_POST["pname"];
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

    $selectPatient = "Select * from patient";
    $result = $conn->query($selectPatient);
    $flag = 0;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($patientid == $row["pid"]) {
                if ($pname == $row["name"]) {
                    $flag = 1;
                    $_SESSION["pid"] = $patientid;
                    $_SESSION["pname"] = $pname;
                    $_SESSION["plogin"] = 1;
                    header('Location: patient.php');
                }
            }
        }
    }
    if ($patientid) {
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