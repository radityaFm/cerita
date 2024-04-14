<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>cerita 4</title>
    <style>
        @font-face{
        font-family: "font";
        src: url(font.ttf);
    }
        body {
    margin: 0;
    padding: 0;
    font-family: 'font';
}

.menu {
    background-color: rgba(0, 0, 0, 0.8);
    position: fixed;
    top: 0;
    left: 0;
    width: 200px;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    z-index: 100;
}

.menu ul {
    list-style: none;
    padding: 0;
}

.menu li {
    margin: 10px 0;
    text-align: center;
}

.menu a {
    text-decoration: none;
    color: white;
}

.background {
    background: url('gambar 1 jpg.jpg') no-repeat center center fixed;
    background-size: cover;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    opacity: 0.8;
}
.container {
    width: 100%;
    padding: 20px;
    position: absolute;
}
.right-button {
    float: right;
    display: block;
    background-color: #333; /* Warna tombol */
    color: #fff; /* Warna teks tombol */
    border: 11px;
    border-radius: 15px;
    padding: 8px 12px;
    cursor: pointer;
    margin-top: 20px
}

.content {
    padding: 100px 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    color: white;
}

.cerita {
    margin: 50px 0;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    width: 100%;
}

.gambar img {
    max-width: 100%;
    height: auto;
    transition: transform 0.3s;
}

.gambar:hover img {
    transform: scale(1.1);
}
p{
    text-align: justify;
    text-indent: 0.5in;
    font-size: small;
    color: black;
}

.teks {
    flex: 1;
    padding: 20px;
    text-align: left;
}

@media screen and (max-width: 768px) {
    .menu {
        position: relative;
        width: 100%;
        height: auto;
        flex-direction: row;
        justify-content: space-around;
    }

    .menu ul {
        display: flex;
    }

    .menu li {
        margin: 0;
    }

    .background {
        position: fixed;
        width: 100%;
        height: 100%;
    }

    .content {
        padding: 100px 20px;
        text-align: center;
    }

    .cerita {
        flex-direction: column;
    }
}

    </style>
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="#cerita1">Cerita 1</a></li>
            <li><a href="#cerita2">Cerita 2</a></li>
            <li><a href="#cerita3">Cerita 3</a></li>
            <li><a href="#cerita4">Cerita 4</a></li>
        </ul>
    </div>
    <div class="background"></div>
    <div class="content">
        <header>
            <h1>Raja pemusnah massal</h1>
        </header>
        <section id="cerita1" class="cerita">
          <p>Sekitar tahun 1450 hingga 1750-an, ada sebuah fenomena kontroversial dan menakutkan dalam sejarah. Raja James VI dari Skotlandia, yang kemudian menjadi James I untuk Inggris, melakukan perburuan massal terhadap banyak penyihir di Eropa. Sekitar 100.000 orang yang kebanyakan adalah wanita, dituduh sebagai penyihir dan dihukum mati.
            Salah satu pusat perburuan paling aktif adalah di Skotlandia, di mana ada sekitar 4.000 orang dibakar hidup-hidup, lebih dari dua kali lipat tingkat eksekusi yang dilakukan di Inggris. Tahun 1590, tidak kurang dari 70 orang pernah ditangkap di Berwick utara, karena dicurigai telah membuat badai untuk menghancurkan armada Raja James, saat ia membawa pengantin barunya, Anne dari Denmark. Yakin badai tersebut karena sihir, James kemudian berniat untuk memberantas para penyihir di daratan Inggris.
            Di bawah penyiksaan yang berat, sebagian besar dari mereka yang ditangkap mengaku bahwa telah menggunakan sejumlah mantra dan ritual aneh sebelum badai dahsyat itu datang. Mereka juga mengaku bahwa Iblis telah muncul dan berjanji akan membuat kabut, dan akan melemparkan Raja James VI ke laut.
            Raja James VI yang mendengar hal tersebut langsung terkejut bukan main. Mulai saat itulah, ia selalu hadir dalam interogasi orang-orang yang ditangkapnya. Ia juga membuat misi kepada bawahannya untuk terus menangkap setiap orang yang dicurigai telah menggunakan sihir.</p>
        </section>
        <section id="cerita2" class="cerita">
            <p>Selama bertahun-tahun perburuan tersebut dilakukan, Raja James VI menyadari bahwa ia ternyata telah terobsesi dengan ilmu sihir. Rasa penasarannya memuncak dan ia pun berniat untuk mempelajari dan mengetahui semua hal tentang sihir. Sampai kemudian, ia pun mulai meyakinkan rakyatnya bahwa sihir termasuk salah satu kejahatan. Ia kemudian menerbitkan sebuah risalah yang disebut Daemonologie (secara harfiah, artinya ilmu setan).</p>
        </section>
        <section id="cerita3" class="cerita">
            <p>Daemonologie dibuat untuk meyakinkan orang-orang yang ragu dengan keberadaan sihir, sebab masih banyak orang di daratan Inggris yang tidak percaya dengan kekuatan magis seperti itu. Raja James VI pun terus berusaha membuat rakyatnya yakin dan menggambarkan bahwa sihir adalah sebuah pengkhianatan besar terhadap Tuhan. Saat Elizabeth I meninggal tahun 1603, tanpa adanya pewaris langsung, Raja Skotlandia itu langsung naik pangkat dan mengubah namanya menjadi James I dari Inggris. Saat setelah itu, ia menjadi ambivalen terhadap sihir, namun tetap membuat aturan perburuan terhadap para penyihir di daratan Inggris. Sebelumnya perburuan kurang ketat dilakukan saat Elizabeth I masih memimpin.</p>
        </section>
        <section id="cerita4" class="cerita">
            <div class="gambar">
                <img src="gambar6.png" alt="Gambar Cerita 4">
            </div>
            <div class="teks">
                <p>Bagaimanapun, keambivalenan Raja James cukup bagus bagi banyak orang. Selama sembilan tahun masa kepemimpinannya, hanya lima orang yang dituduh sebagai penyihir dan digantung mati di Inggris. Jumlah yang jauh berkurang ketimbang saat ia memimpin Skotlandia.</p>
            </div>
        </section>
    </div>
    <a href="cerita3.html">
        <button type="button" class="right-button">Kembali</button>
    <a href="home.html">
        <button type="button" class="right-button">Keluar</button>
</div>
</body>
</html>
