<?php
include "service/database.php";
session_start();

$login_message ="";

if(isset($_SESSION["is_login"])) {
    header("location:dashboard.php");
}


if(isset($_POST['login'])){
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $hash_password = hash("sha256", $password);

    $sql = "SELECT * FROM users WHERE username ='$username' AND PASSWORD = '$hash_password'
    ";
    $result = $db ->query($sql);

    if($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        $_SESSION["username"] = $data["username"];
        $_SESSION["is_login"] = true;


        header("location: dashboard.php");
    }
    else{
        $login_message = "pengguna tidak ditemukan";
    }
    $db->close();
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Reset dasar untuk menghilangkan margin dan padding bawaan */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* Mengatur tampilan body */
body {
    background: url('https://source.unsplash.com/1600x900/?nature,night') no-repeat center center/cover;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    color: white;
}

/* Header dan Footer */
header, footer {
    width: 100%;
    background: rgba(0, 0, 0, 0.7);
    padding: 15px;
    text-align: center;
    position: fixed;
}

header {
    top: 0;
}

footer {
    bottom: 0;
}

/* Container utama */
h3 {
    margin-bottom: 10px;
    font-size: 24px;
}

/* Pesan login */
i {
    color: lightcoral;
    font-size: 14px;
    display: block;
    margin-bottom: 15px;
}

/* Form login */
form {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    width: 300px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

/* Input */
form input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: none;
    border-radius: 5px;
    background: rgba(0, 0, 0, 0.3);
    color: white;
    font-size: 16px;
    outline: none;
}

/* Placeholder styling */
form input::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

/* Tombol */
button {
    width: 100%;
    padding: 10px;
    border: none;
    background: purple;
    color: white;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: darkviolet;
}

    </style>
</head>
<body>
    <?php include "layout/header.html" ?>
    <h3>masuk akun</h3>
    <i><?= $login_message ?></i>
    <form action="login.php" method="POST">
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password"/>

        <button type="submit" name="login">masuk sekarang</button>


    </form>
     <?php include "layout/footer.html" ?>
    
</body>
</html>