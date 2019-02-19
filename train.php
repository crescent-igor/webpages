<html>
<body>


<form action="passenger.php" method="post">
    
<table style="border:solid 2px black;">
    <tr>
        <td>
            Train
        </td>
        <td>
            Dep Time
        </td>
        <td>
            Arrival Time
        </td>
        <td>
            Sleeper
            
        </td>
        <td>
            1st-AC
        </td>
    </tr>
    <?php
    $origin= $_POST["origin"];
    $dest=$_POST["dest"];
    $jrndt=$_POST["jrndt"];
    $cheHydTrn=array(array("Hyderabad Express","23:00","12:00","<input type='radio' name='1S'>","<input type='radio' name='1AC'>"),array("Deccan Superfast","13:00","2:00","<input type='radio' name='2S'>","<input type='radio' name='2AC'>"));
    if($origin=="Chennai" && $dest=="Hyderabad"){
        for ($x = 0; $x < count($cheHydTrn); $x++) {
            echo "<tr>";
            for ($y = 0; $y < count($cheHydTrn[$x]); $y++) {
                echo "<td>";
                echo $cheHydTrn[$x][$y];
                echo"</td>";
            }
            echo "</tr>";
        }   
    }
    ?>
</table>
<input type="submit">
</form>    
</body>
</html>




