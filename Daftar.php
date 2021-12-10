<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <table>
            <tr>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Email</th>
                <th>Username</th>
            </tr>
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM karyawan";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> <?php echo $row["firstname"] ?> </td>
                <td> <?php echo $row["lastname"] ?> </td>
                <td> <?php echo $row["email"] ?> </td>
                <td> <?php echo $row["username"] ?> </td>
            <tr>
                <td>
                <a href="Form.html">Kembali ke Form Register</a>
                <td>
                <a href="LoginForm.html">Kembali ke Form Login</a>
            <?php
                    }
                }
                else{
                    echo "0 results";
                }
                ?>
        </table>
        
    </body>
</html>