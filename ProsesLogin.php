<?php
    include "koneksi.php";

    $username=$_POST['username'];
    $password=$_POST['password'];

    $query="SELECT * FROM karyawan WHERE username='$username' AND password='$password'";
    $result=mysqli_query($connect, $query);
    $cek=mysqli_num_rows($result);

    if($cek > 0){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        ?>
        Anda berhasil login. silahkan menuju
        <a href="Home.php">Halaman Home</a>
    <?php
    }else{
        ?>
        Gagal login, silahkan login lagi
        <a href="LoginForm.html">Halaman Login</a>
    <?php
        echo mysqli_error($connect);
    }
    ?>

    