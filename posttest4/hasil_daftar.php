<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: berhasil_login.php");
}

$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
?>

<script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
</script>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="icon" href="gambar/icons-dessert.ico">
    <title>Registered</title>
</head>
<body>

            <form action= "" method="POST" enctype="multipart/form-data">
            <div class="login-box">
                <div class="logo-container">
                <a href="" class="logo" id="warna">
                    Film<span>Bajakan.com</span>
                </a>
                </div>
                <h1>Berhasil Registrasi</h1>
                <div class="textbox">
                    <i class='bx bx-user'></i>
                    <input name="username" value="<?php echo $username; ?>" readonly>
                </div>

                <div class="textbox">
                    <i class='bx bx-envelope'></i>
                    <input name="email" value="<?php echo $email; ?>" readonly>
                </div>

                <div class="textbox">
                    <i class='bx bx-phone'></i>
                    <input name="phone" value="<?php echo $phone; ?>" readonly>
                </div>

                <div class="textbox">
                    <i class='bx bx-lock-alt'></i>
                    <input name="password" value="<?php echo $password; ?>" readonly>
                </div>

                <button name="submit" class="btn">Sign In Now</button>
        <?php
            if (isset($_POST['submit'])) {
                $_SESSION["username"] = $_POST['username'];
                $_SESSION["priv"] = 'user'; 
                $_SESSION["nama"] = $_POST['nama'];
                header("Location: .");
            }
            if (isset($_SESSION['username'])){
                header("Location: .");
            }
        ?> 
        </form>
    </div>
</body>
</html>