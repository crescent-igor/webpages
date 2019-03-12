<html>

<head>
    <title>
        Hello patient
    </title>

</head>

<body>
    <h1>Welcome to our Hospital Management system</h1>
    <?php
    session_start();
    $plogin = $_SESSION["plogin"];
    if (!$plogin) {
        header('Location: loginFail.html');
    }
    $patientid = $_SESSION["pid"];
    $pname = $_SESSION["pname"];
    echo "<h2>Hello $pname</h2>";

    ?>
    <form action="patient.php" method="post">
        Complaints:<input type="text" name="cmplt"><br>
        Details:<input type="text" name="dets"><br>
        <input type="submit" value="Submit complaint">
    </form>
    <?php

    $complaint = $_POST["cmplt"];
    $dets = $_POST["dets"];
    $conn = mysqli_connect("localhost", "root", "toor", "iwpbase");
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }

    $insComQuery = "update patient set complaint='$complaint',Details='$dets' where pid=$patientid";
    if ($complaint) {

        if (mysqli_query($conn, $insComQuery)) {
            echo "Complaint submitted successfully";
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
    }



    mysqli_close($conn);


    ?>
    <br>
    Prescription:<br>
    <?php
    // echo "$patientid.txt";
    $myfile = fopen("$patientid.txt", "r") or die("No prescriptions received");
    echo fread($myfile, filesize("$patientid.txt"));
    fclose($myfile);
    ?>


</body>

</ html> 