<?php
    include "koneksi.php";

    $firstname=$_GET['firstname'];
    $lastname=$_GET['lastname'];
    $email=$_GET['email'];
    $username=$_GET['username'];
    $password=$_GET['password'];

    $sql="INSERT INTO karyawan(firstname,lastname,email,username,password)
    VALUE ('$firstname','$lastname','$email','$username','$password')";

    if (mysqli_query($connect,$sql)){
        echo "Selamat Datang Karyawan Baru";
        ?>
        <br><a href="LoginForm.html">Log In</a>
        <?php
    }
    else{
        echo "Gagal mendaftar <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>