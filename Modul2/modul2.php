<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $user = strlen($username);
    $pass = strlen($password);
    $x = false;

    if ($user > 7) {
        echo "username lebih dari 7";
        $x = true;
    }
    if (!preg_match("/[A-Z]/", $password)) {
        echo "password kapital\n";
        $x = true;
    }
    if (!preg_match("/[a-z]/", $password)) {
        echo "password kecil\n";
        $x = true;
    }

    if (!preg_match("/[^a-zA-Z\d]/", $password)) {
        echo "password special character\n";
        $x = true;
    }

    if (!preg_match("/[0-9]/", $password)) {
        echo "password digit\n";
        $x = true;
    }
    if ($pass > 10) {
        echo "password lebih dari 10";
        $x = true;
    }
    if ($x == false) {
        echo "berhasil";
    }
}
?>
<link rel="stylesheet" href="atur.css">
<form action="modul2.php" method="POST">
    <fieldset>
        <legend>Login</legend>
        <p>
            <label>Username:</label>
            <input type="text" name="username">
        </p>
        <p>
            <label>Password:</label>
            <input type="password" name="password">
        </p>
        <p>
        <button type="submit">Login</button>
        </p>
    </fieldset>
</form>