<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link href="css/style-login.css" rel="stylesheet">
    </head>
    
    <body>
    <?php
        if(isset($_SESSION['id_admin']))
        { 
            header('location:./?DaftarKeluhan');
        }
        if(isset($_SESSION['flash']))
        {
            $message = $_SESSION['flash'];
            echo "<script type='text/javascript'>alert('$message');</script>";
            unset ($_SESSION['flash']);
        }
    ?>
        <div class="container">
          <h1>Login </h1>
          <form method = "POST">
                <label>Username</label><br>
                <input type="text" name="username" placeholder="Masukkan Username"><br>
                <label>Password</label><br>
                <input type="password" name="password" placeholder="Masukkan Password"><br>
                <input type="submit" name="login" class="btn btn-primary" value="Log in">
            </form>
        </div>     
    </body>
</html>