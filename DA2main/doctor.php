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
    if (!$dlogin) {
        header('Location: loginFail.html');
    }
    $conn = mysqli_connect("localhost", "root", "toor", "iwpbase");
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }
    $doctorid = $_SESSION["did"];
    $dname = $_SESSION["dname"];
    $dspec = $_SESSION["dspec"];
    $dfee = $_SESSION["dfee"];
    echo "<h2>Hello Dr. $dname</h2>";

    ?>
    <form action="doctorSubmit.php" method="post">

        <?php
        $selectPatient = "Select * from patient where complaint='$dspec'";
        // $selectDoctor = "Select * from doctor";
        $result = mysqli_query($conn, $selectPatient);
        // $i = 0;
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $pid=$row['pid'];
                echo "<input type='radio' name='choice' value='$pid'>";
                echo  " - Name: " . $row["name"] . " - Complaint: " . $row["complaint"] . " - Details: " . $row["Details"];
                echo "<br>";
            }
        }
        ?>
        <br>
        <input type='submit' value='Done'>
        <br>
    </form>


    <?php
    // $pid = $_POST["choice"];
    // $_SESSION["choice"]=$pid;
    // $_SESSION["pid"] = $row["pid"];
    // $_SESSION["pname"] = $row["name"];


    mysqli_close($conn);


    ?>
    <br>


    <body>

</html> 