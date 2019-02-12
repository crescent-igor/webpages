<html>
   <body>

      <form action="Q1.php" method="post">
         technician scores: <input type="text" name="scores"><br>
         <input type="submit">
      </form>
      <?php
      $scores= $_POST["scores"];
      $scoreArray=explode(" ",$scores);
      $scoreArrayint=array();
      for ($x = 0; $x < count($scoreArray); $x++) {
         $scoreArrayint[$x]=(int)$scoreArray[$x];
      }
      for ($x = 0; $x < count($scoreArray)-1; $x++) {
         for($y = 0; $y < count($scoreArray)-$x-1; $y++){
            if($scoreArrayint[$y]>$scoreArrayint[$y+1]){
               $a=$scoreArrayint[$y];
               $scoreArrayint[$y]=$scoreArrayint[$y+1];
               $scoreArrayint[$y+1]=$a;
               
            }
         }
      }
      echo "<br>Scores in ascending order:";
      $sum=0;
      for ($x = 0; $x < count($scoreArray); $x++) {
         $sum=$sum+$scoreArrayint[$x];
         echo $scoreArrayint[$x];
         echo " ";
      }

      echo "<br>Lowest Score : ";
      echo $scoreArrayint[0];

      echo "<br>Highest Score : ";
      echo $scoreArrayint[count($scoreArrayint)-1];
      $avg=$sum/count($scoreArrayint);

      echo "<br>Average Score : ";
      echo $avg;
      
      $belowArray=array();
      $aboveArray=array();
      for ($x = 0; $x < count($scoreArray); $x++) {
         if($scoreArrayint[$x]<$avg){
            array_push($belowArray,$scoreArrayint[$x]);
         }else{

            array_push($aboveArray,$scoreArrayint[$x]);

         }
      }
      echo "<br>Score below Average:";
      for ($x = 0; $x < count($belowArray); $x++) {
         echo $belowArray[$x];
         echo " ";
      }

      echo "<br>Score above Average:";
      for ($x = 0; $x < count($aboveArray); $x++) {
         echo $aboveArray[$x];
         echo " ";
      }
      ?>

   </body>
</html> 
