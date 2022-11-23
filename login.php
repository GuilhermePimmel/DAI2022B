<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="actions/actions_login.php"> 
    <div>
        <p style="color:blueviolet"><b><label>Usuario</label></b></p>
        <input id="user" type="text" name="user">
    </div>
    <div>
        <p style="color:blueviolet"><b><label>Senha</label></b></p>
        <input id="psw" type="text" name="psw">
    </div>
    <?php
        if(isset($_SESSION["erro"])){
            echo $_SESSION["erro"];
        }
    ?>
    <div>
        <input type="submit" id="logar" value="entrar">
    </div>
    </form>
</body>
</html>