<?php
session_start();

if (isset($_SESSION['login'])){
    header('Location: /session/member.php');
    exit();
}

$error = "";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if ($_POST['username'] == "Christian" && $_POST['password'] == 'Christian'){
        // sukses
        $_SESSION['login'] = true;
        $_SESSION['username'] = 'Christian';
        header('Location: /session/member.php');
        exit();
    } else {
        // gagal
        $error = "Login Gagal";
    }
}

?>

<html>
<body>
<?php if ($error != "") { ?>
    <h2><?= $error ?></h2>
<?php } ?>
<h1>Login</h1>
<form action="/session/login.php" method="post">
    <label>Username :
        <input type="text" name="username">
    </label>
    <br/>
    <label>Password :
        <input type="password" name="password">
    </label>
    <br/>
    <input type="submit" value="Login">
</form>
</body>
</html>