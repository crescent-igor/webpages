<html>
    <head>    
    </head>    

   <body>

      <form action="Q2.php" method="post">
         table until: <input type="number" name="num"><br>
         <input type="submit">
      </form>
      <?php
      $num= $_POST["num"];
      echo "<table>";
      
      for ($x = 1; $x < $num; $x++) {
        echo "<tr>";
        echo "<td>$x</td>";
        for ($y = 2; $y < $num; $y++){
            $prod=$x*$y;
            echo "<td>$prod</td>";
        }
        echo "</tr>";
     }     
      
      echo "</table>";
      ?>

   </body>
</html> 
