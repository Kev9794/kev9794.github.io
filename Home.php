<html>
    <head>
    <link rel="stylesheet" type="text/css" href="styleHome.css" />
    </head>
    <body>
        <?php
        session_start();

        if($_SESSION['status'] == 'login'){
            ?>
            <div class="form">
            <h2 style="color: black;">Selamat Datang Karyawan di PT.Kev</h2>
            <br><?php
            echo "hi! " . $_SESSION['username']?>
            <br><p style="color: grey;">Anda ingin logout?</p>
            <a href="Logout.php">Log Out</a>
            </div>
            <?php
        }else{
            echo "anda belum login. silahkan "?>
            <a href="sessionLoginForm.html">Log In</a>
            <?php
        }
        ?>
    </body>
</html>