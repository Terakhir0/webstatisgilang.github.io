<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="interface/style.css">


</head>

<body>

    <header>
        <h1>Login dan Register Form</h1>


        <nav>

            <a href="index.php">Home</a>

            <?php if (!isset($_SESSION['user']) ){ ?>
            <a href="login.php">login</a>
            <a href="register.php">register</a>

            <?php  }else{       ?>

            <a href="logout.php">LOG OUT</a>
            <a href="register.php">register</a>
            <a href="../index.html">Kembali</a>

            <?php }?>





        </nav>

    </header>