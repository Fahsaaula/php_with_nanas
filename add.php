<?php
    if (isset($_POST['add'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $role = $_POST['role'];

        include 'config/koneksi.php';

        $result = mysqli_query($koneksi,"INSERT into user(user,name,password,role) values('$username','$password','$name','$role')");

        echo '<script>alert("data berhasil di add");document.location.href="index.php"</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    <a href="index.php">Back To Home</a>
    <br><br>

    <form action="add.php" method="post">
        <table width="25%">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" id="" placeholder="Username"></td>
            </tr>
            <tr>
                <td>Passowrd</td>
                <td><input type="password" name="password" id="" placeholder="Password"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="" placeholder="Name of User"></td>
            </tr>
            <tr>
                <td>Role</td>
                <td><input type="text" name="role" id="" placeholder="Role User"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="add" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>