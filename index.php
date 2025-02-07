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

body {
    background-color: #f4f4f4;
    color: #333;
    line-height: 1.6;
    text-align: center;
    padding: 20px;
}

header, footer {
    background-color: #333;
    color: white;
    padding: 15px;
    text-align: center;
}

main {
    background: white;
    padding: 20px;
    margin: 20px auto;
    max-width: 800px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

p {
    font-size: 1.2rem;
}

    </style>
</head>
<body>
    <?php include "layout/header.html" ?>
    <main>
        <p>selamat datang di website kami</p>
    </main>
    <?php include "layout/footer.html" ?>
</body>
</html>