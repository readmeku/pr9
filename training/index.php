
<?php
    include("connection_db.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_SESSION['username'])){
        ?>
         <form action="login.php" method="POST">
    username1:
    <input type="text" name="username"><br>
    password1:
    <input type="password" name="password"><br>
    <input type="submit" name="submit" value="login">
    
   </form>

        <?php
    }else{
        ?>

        <h1>hello <?php echo $_SESSION['username']?></h1>
        <button><a href="logout.php">logout</a></button>
        <?php
    }
    ?>
  
</body>
</html>


