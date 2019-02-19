<html>

<body>
    <?php
            session_start();
            $origin=$_SESSION["origin"];
            $dest=$_SESSION["dest"];
            $jrndt=$_SESSION["jrndt"];
            $firstS= $_POST["1S"];
            $firstAC= $_POST["1AC"];
            $secondS= $_POST["2S"];
            $secondAC= $_POST["2AC"];
            
        ?>
        <table>
            <?php
                echo "From city: $origin&nbsp";
                echo "Destination city:$dest<br>";
                echo "Date: $jrndt&nbsp";
                if($firstS){
                    echo "Hyderabad Express<br>";
                    echo "23:00  12:00<br>";
                    echo "Sleeper";

                }
                if($firstAC){
                    echo "Hyderabad Express<br>";
                    echo "23:00  12:00<br>";
                    echo "AC";
                }
                if($secondS){
                    echo "Deccan Superfast<br>";
                    echo "13:00  2:00<br>";
                    echo "Sleeper";
                }
                if($secondAC){
                    echo "Deccan Superfast<br>";
                    echo "13:00  2:00<br>";
                    echo "AC";
                }

            ?>
        </table>
</body>

</html>
