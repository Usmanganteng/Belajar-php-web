<?php
session_start();

if ($_SESSION['login'] == true){
    header('Location: /session/member.php');
    exit();
};

    $error = "";
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if ($_POST['username'] == 'aldizar' && $_POST['password'] = 'aldizar'){
            $_SESSION['login'] = true;
            $_SESSION['username_login'] = 'ai   dizar';
            header('Location: /session/member.php');
            exit();
        }else {
            $error = "login gagal";
        }
    }
?>

<html>
<body>
    <?php if($error !=""){?>
        <h2><?= $error ?></h2>
    <?php } ?>
    <form action="/session/login.php" method="post">
        <label> Username :
            <input type="text" name="username">
        </label>
        <br>
        <label> Password :
            <input type="password" name="pssword">
        </label>
        <br>
        <input type="submit" name="Login">
    </form>
</body>
</html>