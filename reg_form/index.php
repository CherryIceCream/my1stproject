<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" 
          content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
<?php
require('connect.php');

if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($connection, $query);

    if ($result){
        $smsg = "Регистрация прошла успешно";
    } else {
        $fsmsg = "Ошибка";
    }
}
?>

    <div class="container">
        <form class="form-signin" method="POST">
            <h2>Registration</h2>
            <?php if(isset(smsg)){ ?><div class "alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php }?>
            <?php if(isset(fsmsg)){ ?><div class "alert alert-danger" role="alert"> <?php echo $fsmsg; ?> </div><?php }?>

            <input type="text" name="username" class="form-control" placeholder="username" require>
            <input type="text" name="email" class="form-control" placeholder="email" require>
            <input type="text" name="password" class="form-control" placeholder="password" require>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
    </div>
    
</body>
</html>>