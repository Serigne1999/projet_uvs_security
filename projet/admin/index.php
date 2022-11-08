<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
<body>
    <div class="loginbox">
        <img src="../images/b1.png" alt="" class="avatar">
        <h1>Page Admin</h1>
        <form action="validation.php" method="post">
            <label for="user">Identifiants</label>
            <input type="text" name="user" id="user" placeholder="Entrer votre identifiants">
            <label for="pwd">Mot de passe</label>
            <input type="password" name="pwd" id="pwd" placeholder="Mot de passe">
            <input type="submit" value="se connecter">
            <a href="#">Mot de passe oubliés?</a>
            <a href="#">identifiants oubliés?</a>
        </form>
    </div>
    
</body>
<style>
    h1{
        margin: 0;
        padding: 0 0 20px;
        text-align: center;
        font-size: 22px;
        font-weight: none;
    }
    .loginbox{
        font-family: 'Holtwood One SC', sans-serif;
        width: 320px;
        height: 420px;
        background: #000;
        color: #fff;
        top: 50%;
        left: 50%;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 70px 30px;
    }
    .loginbox label{
          display: block;
          margin: 0;
          padding: 0;
          font-weight: 200;
    }
    .loginbox input{
        width: 100%;
        margin-bottom: 20px;
    }
    .loginbox input[type="text"], input[type="password"]{
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;

    }
    .loginbox input[type="submit"]{
       border: none;
       outline: none;
       height: 40px;
       background: #fb2525;
       color: #fff;
       font-size: 18px;
       border-radius: 20px;
    }
    .loginbox input[type="submit"]:hover{
        cursor: pointer;
        background: #ffc107;
        color: #000;
    }
    .loginbox a{
        text-decoration: none;
        font-size: 8px;
        line-height: 20px;
        color: darkgrey;
        
    }
    .loginbox a:hover{
        color: #ffc107;
    }
    .avatar{
        width: 30%;
        height: 30%;
        border-radius: 50%;
        position: absolute;
        top: -80px;
        left: calc(50% - 50px);
    }
</style>
</html>