<html>
    <body>
        <?php
            session_start();
            $name= $_SESSION['nm'];
            $login=$_SESSION['login'];
            if(!$login){
                header('Location: index .php');
            }
            $userarray=array("Amrit"=>"tirma","Stith"=>"htits","Tejsv"=>"vsjet");
            
            $flag=0;         
        ?>  
    </body>
</html>