<?php
 include('connection.php')
?>
<?php
 include('login_conn.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
</head>
<body style="background-color:black;">
    <h2 style="color:purple; text-align: center; padding-top: 4cm;"> <i> login page</i></h2>
    <form action="index.php" method="POST">
        <div class="main" >      
            <div class="label1">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username"  class="form-control" placeholder="please enter your username">
            </div>

            <div class="label2" >
                <label for="password"  class="form-label" style="width: 4cm;">Password</label>
                <input type="password" class="form-control" name ="password" placeholder="please enter your passsword">
            </div>
        <button class="btn btn-secondary" style="color: black; margin-top: 1.5cm; margin-left: 10cm; " type= "submit" name = "submitButton">Enter</button  >
        <p>Don't have an account? <a href="sign_up.php">sign up</a></p>
        </div>

    </form>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>