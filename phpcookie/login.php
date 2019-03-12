<html>
    <body>
        <?php
            $name= $_POST['nm'];
            $pwd=$_POST['pwd'];
            $userarray=array("Amrit"=>"tirma","Stith"=>"htits","Tejsv"=>"vsjet");
            $flag=0;
            if($pwd){
                foreach ($userarray as $key => $value){
                    if($name==$key){
                        if($pwd==$value){
                            $flag=1;
                            session_start();
                            $_SESSION['login']=1;
                            $_SESSION['nm']=$name;
                            header('Location: main.php');
                        }
                    }
                } 
            }
            if(!$flag){
                echo "Login failed, Please check username passsword";
            }

            
        ?>  
    </body>
</html>