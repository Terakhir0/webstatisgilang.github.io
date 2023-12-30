<?php

    require_once "core/init.php";

    //redirect kalau user sudah login
    if (isset($_SESSION['user']) )  {
              $_SESSION['pesan'] = 'anda belum logout';
              header('Location: index.php');
    }



    $error = '';

    //validasi register
    if(isset($_POST['submit'])   ) {
        $nama = $_POST['username'];
        $pass = $_POST['password'];
        

        if(!empty(trim($nama)) && !empty(trim($pass)) ) {


            if ( cek_nama($nama) == 0 ){
            //memasukan ke database

            if(register_user($nama, $pass) )
               redirect_login($nama);

             else $error =  ('gagal');
            }else $error =  ('nama sudah ada');
            }else $error =  ('tidak boleh kosong');
        }
    


    require_once "interface/header.php";
    

?>

    <form action="register.php" method="post">
        <label for="">Nama</label> <br>
        <input type="text" name="username"><br><br>


        <label for="">Password</label> <br>
        <input type="password" name="password"> <br><br>

        <input type="submit" name="submit" value="daftar">

        <br>
         <?php if($error != '') { ?>
            <div id="error">
                <?=  $error; ?>
            </div>
            
                <?php } ?>

    </form>


<?php
    require_once "interface/footer.php";

?>