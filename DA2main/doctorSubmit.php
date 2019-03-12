<html>

<head>
    <title>
        Hello doctor
    </title>

</head>

<body>
    <h1>Welcome to our Hospital Management system</h1>
    <?php
    session_start();
    $dlogin = $_SESSION["dlogin"];
    $pid = $_POST["choice"];
    if(!$_SESSION["choice"]){
        $_SESSION["choice"] = $pid;
    }
    if (!$dlogin) {
        header('Location: loginFail.html');
    }
    $conn = mysqli_connect("localhost", "root", "toor", "iwpbase");
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }

    $selectPatient = "Select * from patient where pid='$pid'";
    // $selectDoctor = "Select * from doctor";
    $result = mysqli_query($conn, $selectPatient);
    // $i = 0;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['name'] . "' Prescription:";
        }
    }

    // $doctorid = $_SESSION["did"];
    // $dname = $_SESSION["dname"];
    // $dspec = $_SESSION["dspec"];
    // $dfee = $_SESSION["dfee"];

    ?>
    <br>

    <form action="doctorSubmit2.php" method="post">
        <textarea name="pscpt" rows='10' cols='200'></textarea><br>

        <input type="submit" value="Write Prescription">

    </form>


    <?php
    mysqli_close($conn);

    ?>
    <br>


    <body>

</html> 