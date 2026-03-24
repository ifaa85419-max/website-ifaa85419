<!DOCTYPE html>
<html>
<head>
    <title>CopyFast Premium</title>

    <!-- AOS ANIMATION -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- MUSIK -->
<audio autoplay loop>
    <source src="music.mp3" type="audio/mp3">
</audio>

<!-- OPENING -->
<div class="opening" id="opening">
    <img src="logo.png">
    <h1>CopyFast</h1>
    <p>✨ Cetak Jadi Lebih Mudah ✨</p>
    <button onclick="start()">Masuk 🚀</button>
</div>

<div id="main">

<!-- HEADER -->
<header>
    <div class="logo-area">
        <img src="logo.png">
        <h2>CopyFast</h2>
    </div>
    <nav>
        <a href="#home">Home</a>
        <a href="#layanan">Layanan</a>
        <a href="#order">Order</a>
    </nav>
</header>

<!-- HERO -->
<section class="hero" id="home">
    <h1 data-aos="zoom-in">📄 Cetak Online Premium</h1>
    <p data-aos="fade-up">Cepat • Modern • Tanpa Antri</p>
    <a href="#order"><button class="btn">Order Sekarang 🚀</button></a>
</section>

<!-- LAYANAN -->
<section id="layanan">
    <h2 data-aos="fade-up">✨ Layanan Kami</h2>

    <div class="grid">
        <div class="card" data-aos="zoom-in">📄 Print</div>
        <div class="card" data-aos="zoom-in">📚 Fotokopi</div>
        <div class="card" data-aos="zoom-in">📌 Jilid</div>
    </div>
</section>

<!-- ORDER -->
<section id="order">
    <h2 data-aos="fade-up">📝 Order Sekarang</h2>

    <form action="proses.php" method="POST" enctype="multipart/form-data" data-aos="fade-up">

        <input type="text" name="nama" placeholder="Nama 😊" required>

        <select name="layanan" onchange="hitung()">
            <option>Print Hitam Putih</option>
            <option>Print Warna</option>
            <option>Fotokopi</option>
        </select>

        <input type="number" name="jumlah" placeholder="Jumlah" onkeyup="hitung()" required>

        <input type="file" name="file" required>

        <p id="total">💰 Total: Rp 0</p>

        <button class="btn">Pesan 🎉</button>
    </form>
</section>

<footer>
    <p>💙 CopyFast Premium 2026</p>
</footer>

</div>

<!-- SCRIPT -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
AOS.init();

function start(){
    document.getElementById("opening").style.opacity = "0";
    setTimeout(()=>{
        document.getElementById("opening").style.display="none";
        document.getElementById("main").style.display="block";
    },800);
}

function hitung(){
    let jumlah = document.querySelector("input[name=jumlah]").value;
    let layanan = document.querySelector("select").value;

    let harga = 0;
    if(layanan == "Print Hitam Putih") harga = 500;
    else if(layanan == "Print Warna") harga = 1000;
    else harga = 300;

    document.getElementById("total").innerHTML = "💰 Total: Rp " + (harga * jumlah);
}
</script>
<a href="https://wa.me/6281234567890" class="wa" target="_blank">
💬 Chat WhatsApp
</a>
</body>
</html>