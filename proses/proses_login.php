<?php
session_start();
include "connect.php";
$username =(isset ($_POST['username'])) ? htmlentities( $_POST['username']): "";
$password=(isset ($_POST['password'])) ? md5(htmlentities( $_POST['password'])) : "";
if (!empty($_POST['submin_validate'])){
    $query = mysqli_query($conn,"SELECT * FROM tb_user WHERE username='$username' && password =
    '$password'");
    $hasil = mysqli_fetch_array($query);
    if ($hasil){
        $_SESSION ['username_decafe'] = $username;
        $_SESSION ['level_decafe'] = $hasil['level'];
        header("location:../Home");
    }else { ?>
    <script>
        alert('username atau password yang anda masukn salah');
        window.location= '../Login'
    </script>
    <?php
    }  
}
?>