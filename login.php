<?php 
    session_start();

    if (isset($_SESSION["login"])) {
        header("location:index.php");
        exit;
    }

    if (isset($_POST["submit"])) {
        $hakakses = $_POST["hakakses"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $passwordkonfirmasi = $_POST["passwordkonfirmasi"];

        if ($password == $passwordkonfirmasi) {
            if ($hakakses == "admin") {
                if (($username == "admin") && ($password == "admin")) {
                    $_SESSION["login_admin"] = true;
                    header("location:admin.php");
                }
                else {
                    $error = true;
                }
            }
        elseif ($hakakses == "user") {
            if (($username == "user") && ($password == "user")) {
                $_SESSION["login_user"] = true;
                header("location:indexLogin.php");
            }
            else {
                $error = true;
            }
        }
        }
    $error = true;

    if ($error) {
        $message = "Password / Username anda salah";
    }
    echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <br>

            <!-- Login Form -->
            <form action="" method="post" name="form">
                <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="text" id="passwordkonfirmasi" class="fadeIn third" name="passwordkonfirmasi" placeholder="Password Confirmation">
                <br>
                <select name="hakakses" id="hakakses"><option value="">--Mau Login Sebagai--</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                <br><br>
                <input type="submit" name="submit" class="fadeIn fourth" value="Login">
            </form>

        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
</body>

</html>