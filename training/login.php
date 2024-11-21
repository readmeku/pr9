<?php
    session_start();
    include('connection_db.php');
    
        $username = $_POST['username'];
        $password = $_POST['password'];

        echo $username ."<br>";
        echo $password ."<br>";

        $sql = "SELECT * FROM user WHERE user_name='$username'";
        
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)==1){
            echo 'userfound'."<br>";

            $row = mysqli_fetch_assoc($result);
            echo $row['user_name'];

            if($row['password']== $password){
                echo "loging successfull"."<br>";
                $_SESSION['username']=$username;
                header("location:index.php");
            }else{
                echo "password is wrong!" ;
            }
        }
        else{
            echo 'user not found';
        }
    


?>