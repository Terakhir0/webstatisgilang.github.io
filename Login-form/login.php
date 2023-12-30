<?php

    require_once "core/init.php";

    //redirect kalau user sudah login
    if (isset($_SESSION['user']) ) header('Location: index.php');
    


    $error = '';


    //validasi register
    if(   isset($_POST['submit'])   ) {
        $nama = $_POST['username'];
        $pass = $_POST['password'];
        

        if(!empty(trim($nama)) && !empty(trim($pass)) ) {

          if(cek_nama($nama)){
            
            if ( cek_data($nama, $pass)) redirect_login($nama);
              else  $error = 'data ada yang salah';
            } else  $error = 'nama tidak ada';
            } else  $error = 'tidak boleh kosong';
    }


    require_once "interface/header.php";

    //menguji  pesan session

    if(isset($_SESSION['msg'])) flash_delete($_SESSION['msg']);
    

?>

<link rel="stylesheet" href="style.css">

<form action="login.php" method="post">
        <label for="">Nama</label> <br>
        <input type="text" name="username"><br><br>


        <label for="">Password</label> <br>
        <input type="password" name="password"> <br><br>

        <input type="submit" name="submit" value="Login">

        <br>
         <?php if($error != '') { ?>
            <div id="error">
                <?= $error; ?>
            </div>
            
                <?php } ?>

    </form>



<?php
    require_once "interface/footer.php";

?>