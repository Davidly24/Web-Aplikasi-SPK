<html>
<head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="css1/login.css">
</head>
<body>

<?php
    error_reporting(0);
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
           $A1 = "Username atau Password Salah !";
        }
    }
?>

<div class="login">
    <h2 class="login-header">Login</h2>

    <form class="login-container" action="cek_login.php" method="post">
    <p>
        <input type="text" name="username" class="form_login" placeholder="Username..." required>
    </p>
    <p>
        <input type="password" name="password" class="form_login" placeholder="Password" required>
    </P>
    <p>
        <input type="submit" class="tombol_login" value="LOGIN">
    </p>
    </form>
    <center><span class="blink"><?php echo $A1 ?></span><center>
</div>
</body>
</html>