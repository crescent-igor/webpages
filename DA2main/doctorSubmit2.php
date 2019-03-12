<html>

<body>
    <h1> Submitted successfully</h1>
    <a href="doctor.php">Menu</a>
    <?php
    session_start();
    $a = ((string)$_SESSION["choice"]) . ".txt";
    
    $myfile = fopen($a, "w") or die("Unable to open file!");
    $a = fwrite($myfile, $_POST["pscpt"]);
    fclose($myfile);
    ?>
</body>

</html> 