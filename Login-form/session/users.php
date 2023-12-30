<?php
    require_once "Login-form/core/init.php";

    function register_user($nama, $pass){

        global $link;

        //mencegah mysqli injection
        $nama = escape($nama);
        $pass = escape($pass);


        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (username, password) VALUES ('$nama', '$pass')";

        if( mysqli_query($link, $query) )
             return true;
        else return false;
        }
    

//meguji nama kembar




//meguji nama di database


function cek_nama($nama){
    global $link;
    $nama = escape($nama);
    
    $query = "SELECT * FROM users WHERE username = '$nama' ";

    if( $result = mysqli_query($link, $query) ) return mysqli_num_rows($result);
    
}


//untuk login

    function cek_data($nama, $pass){
        global $link;

        $nama = escape($nama);
        $pass = escape($pass);

        $query  = "SELECT password FROM users WHERE username = '$nama'";
        $result = mysqli_query($link, $query);
        $hash   = mysqli_fetch_assoc($result)['password'];

        if( password_verify($pass, $hash)?? null)
              return true;
         else return false;  }



    function escape($data){
        global $link;
        return mysqli_real_escape_string($link, $data);
    }



    function redirect_login($nama){
        $_SESSION['user'] = $nama;
        header('Location: ../index.php');
    }

    function flash_delete($nama){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);

    }

    function flash_delete2($nama){
        echo $_SESSION['pesan'];
        unset ($_SESSION['pesan']);
    }


    ?>