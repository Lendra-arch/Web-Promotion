<?php
if(isset($_POST['login'])) {
 $username = $_POST['username'];
 $password = $_POST['password'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include "layout/header.html"?>
    <h3>MASUK AKUN</h3>
    <form action="login.php" method="POST">
        <input type="text" placeholder="username" name="username"/><br>
        <input type="text" placeholder="password" name="password"/><br>
        <button type="submit" value="login">login</button>
    </form>
    <?php include "layout/footer.html" ?>
</body>
</html>