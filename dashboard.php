<?php

session_start();
if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header('location: index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
.fContainer{
    background-color: rgb(255 255 255);
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    
}

.btn {
  width: 140px;
  height: 50px;
  background: linear-gradient(to top, #00154c, #12376e, #23487f);
  color: #ffffff;
  border-radius: 50px;
  border: none;
  outline: none;
  cursor: pointer;
  position: relative;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
  overflow: hidden;
}

.btn span {
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 1px;
  transition: top 0.5s;
}

.btn-text-one {
  position: absolute;
  width: 100%;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
}

.btn-text-two {
  position: absolute;
  width: 100%;
  top: 150%;
  left: 0;
  transform: translateY(-50%);
}

.btn:hover .btn-text-one {
  top: -100%;
}

.btn:hover .btn-text-two {
  top: 50%;
}



.Container{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 5rem;
   
    
}

.cards {
  display: flex;
  flex-direction: column;
  gap: 15px;
  
}

.cards .red {
  background-color: #f43f5e;
}

.cards .blue {
  background-color: #3b82f6;
}


.cards .green {
  background-color: #22c55e;
}

.cards .yellow {
  background-color: rgb(255, 223, 94);
}


.cards .card {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  text-align: center;
  height: 100px;
  width: 250px;
  border-radius: 10px;
  color: white;
  cursor: pointer;
  transition: 400ms;
}

.cards .card p.tip {
  font-size: 1em;
  font-weight: 700;
}

.cards .card p.second-text {
  font-size: .7em;
}

.cards .card:hover {
  transform: scale(1.1, 1.1);
}

.cards:hover > .card:not(:hover) {
  filter: blur(10px);
  transform: scale(0.9, 0.9);
}

.tip >a {
    text-decoration: none;
    color: #fff;
}

/* Background overlay */
#popupOverlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    visibility: hidden;
    opacity: 0;
    transition: opacity 0.3s ease, visibility 0.3s ease;
}

/* Box Popup */
#popupBox {
    background: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    max-width: 300px;
}

/* Tombol Tutup */
#closePopup {
    margin-top: 15px;
    padding: 8px 15px;
    border: none;
    background: #007bff;
    color: white;
    cursor: pointer;
    border-radius: 5px;
    transition: background 0.3s ease;
}

#closePopup:hover {
    background: #0056b3;
}

/* Tampilkan Popup */
.showPopup {
    visibility: visible !important;
    opacity: 1 !important;
}

/* Reset dasar */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* Pusatkan kontainer utama */
.fContainer {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    text-align: center;
}

/* Gaya untuk h3 */
h3 {
    margin-top: 20px;
    font-size: 24px;
    font-weight: bold;
    color: #333;
}

/* Gaya tombol logout */
form {
    margin-top: 10px;
}

button {
    padding: 10px 20px;
    border: none;
    background: #ff4b5c;
    color: white;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: #d43f4a;
}


    </style>
</head>
<body>


     <div class="fContainer">
            <div class="fContainer">
        
<button class="btn">
    <span class="btn-text-one">faisal</span>
    <span class="btn-text-two">sadli</span>
</button>


    <header>
        <div class="Container">
     
<div class="cards">
    <div class="card red">
        <p class="tip"><a href="https://docs.google.com/spreadsheets/d/1JO4dwpW6z9hk1iSK0OD_cF3swb9l6eFH/edit?gid=988264137#gid=988264137">DEVICE</a></p>
        <p class="second-text">STOCK TOKO</p>
    </div>
    <div class="card blue">
        <p class="tip"><a href="https://docs.google.com/spreadsheets/d/1QRYHU9xIb12k_knFJhHlLOvJPNAsUNlT/edit?gid=1391788444#gid=1391788444">ACC</a></p>
        <p class="second-text">aksesoris</p>
    </div>

    <div class="card yellow">
        <p class="tip"><a href="https://docs.google.com/spreadsheets/d/13UzLreCbwS3xQnjTuCxwLPzvzda3yIxD/edit?gid=1618710359#gid=1618710359">DEMO</a></p>
        <p class="second-text">demo</p>

    </div>

    <div class="card green">
        <p class="tip"><a href="https://docs.google.com/spreadsheets/d/1WnMwVCgRdMaYknqCZJYiWQ5RKBetY1fCjpjscBfqvI4/edit?gid=0#gid=0">stock all</a></p>
        <p class="second-text">stock all</p>
    </div>

</div>


</div>
    </header>
<!-- pop up -->
    <div id="popupOverlay">
    <div id="popupBox">
        <h2>Selamat Datang!</h2>
        <p>sudah minta akses sama dion?</p>
        <button id="closePopup">akses sekarang!</button>
    </div>
</div>
<!-- pop up end -->

  <h3>selamat datang <?= $_SESSION["username"] ?></h3>

    <form action="dashboard.php" method="POST">
        <button type="submit" name="logout">logout</button>
    </form>

    
<script>
    document.addEventListener("DOMContentLoaded", function () {
  const popupOverlay = document.getElementById("popupOverlay");
  const closePopup = document.getElementById("closePopup");

  // Cek apakah popup sudah pernah ditutup
 
    popupOverlay.classList.add("showPopup");
  

  // Event tombol tutup popup
  closePopup.addEventListener("click", function () {
    popupOverlay.classList.remove("showPopup");
    localStorage.setItem("popupShown", "true"); // Simpan status popup
  });
});

</script>
</body>
</html>