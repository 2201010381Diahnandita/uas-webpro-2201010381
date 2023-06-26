<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>

    <style>
        body {
            background-image: url('foto.jpeg');

            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .centered-title {
            text-align: center;
            color: #000; 
            font-family: Arial, sans-serif; 
            margin-top: 100px; 
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            text-align: center;
        }

        .large-button {
            font-size: 20px;
            padding: 10px 20px;
            background-color: #ff0000; 
            border: none;
            color: #fff; 
            font-weight: bold;
            cursor: pointer;
            border-radius: 4px;
        }

        .large-button:hover {
            background-color: #ff6699; 
        }
    </style>
</head>
<body>
    <h1 class="centered-title">
        <?php
        echo "Selamat Datang, Silahkan Melakukan Login Terlebih Dahulu";
        ?>
    </h1>
    
    <div class="login-container">
        <form class="login-form" method="post" action="loginuser.php">
            <input type="submit" value="Login User" class="large-button">
        </form>
    </div>
</body>
</html>