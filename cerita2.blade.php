<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cerita 2</title>
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
    .tombol-pindah-halaman {
    display: block;
    background-color: #333; /* Warna tombol */
    color: #fff; /* Warna teks tombol */
    border: 11px;
    border-radius: 15px;
    padding: 8px 12px;
    cursor: pointer;
    margin-top: 40px;
}
    .masuk-list-siswa{
      display: block;
      background-color: #333; /* Warna tombol */
      color: #fff; /* Warna teks tombol */
      border: 11px;
      border-radius: 15px;
      padding: 8px 12px;
      cursor: pointer;
      margin-top: 20px;
       }
.menu {
    background-color: rgba(0, 0, 0, 0.7);
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    z-index: 100;
}

.menu ul {
    list-style: none;
    display: flex;
    justify-content: center;
    margin: 0;
    padding: 10px;
}

.menu li {
    margin: 0 10px;
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
}

.content {
    padding: 100px 0;
}

.cerita {
    padding: 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
p{
    
    font-size: small;
    text-indent: 0.5in;
}
h1{
    text-indent: 0.5in;
}

.gambar img {
    max-width: 100%;
    height: auto;
    transition: transform 0.3s;
    align-items: right;
}

.gambar:hover img {
    transform: scale(1.1);
}

.teks {
    flex: 1;
    padding: 20px;
}

@media screen and (max-width: 768px) {
    .menu ul {
        flex-direction: column;
        align-items: center;
        display: none;
    }

    .menu.active ul {
        display: flex;
    }

    .menu.active li {
        margin: 10px 0;
    }

    .cerita {
        flex-direction: column;
        text-align: center;
    }

    .teks {
        padding: 20px;
    }
}
 </style>
</head>
<body>
    <div>
        <a href="cerita3.html">
            <button type="button" class="tombol-pindah-halaman">Selanjutnya</button>
        <a href="cerita1.html">
            <button type="button" class="masuk-list-siswa">Kembali</button>
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
            <h1>Bahtera penerjang laut</h1>
        </header>
        <section id="cerita1" class="cerita">
         <p>Selama berdakwah, Nabi Nuh sering kali mengalami penolakan oleh kaumnya. Hanya sedikit dari kaumnya yang mau beriman kepada Allah SWT, sedangkan banyak lainnya enggan dan tetap menyembah berhala. Bahkan, mereka yang menolak tak segan untuk mengejek Nuh dan para pengikutnya.

            Hal itu membuat Sang Rasul nyaris berputus asa, kemudian ia berdoa untuk meminta pertolongan kepada Allah. “Maka dia (Nuh) mengadu kepada Tuhannya, ‘Sesungguhnya aku telah dikalahkan, maka tolonglah (aku)’.” (Surah Al Qamar: 10)
            
            Di dalam Surah Hud ayat 37, Allah berfirman, “Dan buatlah kapal itu dengan pengawasan dan petunjuk wahyu Kami, dan janganlah engkau bicarakan dengan Aku tentang orang-orang yang zalim. Sesungguhnya mereka itu akan ditenggelamkan.”
            
            Lalu Nabi Nuh membuat kapal yang menurut tulisan Abdullah bin ‘Umar al-Baidawi dari abad ke-13, ukurannya sepanjang 300 hasta (atau setara 13,5 meter). Bahtera Nabi Nuh tersebut dibuat bertingkat, di mana tingkat pertama menjadi tempat para binatang, tingkat kedua ditempati manusia, dan tingkat ketiga yang berada di paling atas ditempati burung-burung.
            
            “Muatkanlah ke dalamnya (kapal itu) dari masing-masing (hewan) sepasang (jantan dan betina), dan (juga) keluargamu kecuali orang yang telah terkena ketetapan terdahulu dan (muatkan pula) orang yang beriman.” (Surah Hud: 40)
            
            Segera setelah bahtera selesai dikerjakan, Allah menurunkan azab kepada kaum kafir dengan mendatangkan hujan yang lebat hingga menyebabkan banjir, serta badai topan yang meluap-luap. “Lalu Kami bukakan pintu-pintu langit dengan (menurunkan) air yang tercurah, dan Kami jadikan bumi menyemburkan mata-mata air maka bertemulah (air-air) itu sehingga (meluap menimbulkan) keadaan (bencana) yang telah ditetapkan.” (Al Qamar: 11–12)
            
            “Dan Kami angkut dia (Nuh) ke atas (kapal) yang terbuat dari papan dan pasak, yang berlayar dengan pemeliharaan (pengawasan) Kami sebagai balasan bagi orang yang telah diingkari (kaumnya). Dan sungguh, kapal itu telah Kami jadikan sebagai tanda (pelajaran). Maka adakah orang yang mau mengambil pelajaran?” (Al Qamar: 13–15).</p>
        </section>
        <section id="cerita2" class="cerita">
            <div class="gambar">
                <img src="gambar 3.png" alt="Gambar Cerita 2">
            </div>
            <div class="teks">
                <P>Kapal yang membawa Nabi Nuh dan umatnya disebut berlayar selama lima atau enam bulan, menunggu sampai banjir surut. Abdul Hasan Ali bin al-Husayn Masudi mengatakan, Nuh meninggalkan bahteranya pada hari ke-10 di bulan Muharram.

                    Konon, kapalnya mendarat di Gunung Judi sebagaimana tertulis dalam Surah Hud ayat 44 yang bunyinya, “‘Wahai bumi! Telanlah airmu dan wahai langit (hujan!) berhentilah!’ Dan air pun disurutkan, dan perintah pun diselesaikan dan kapal itupun berlabuh di atas Gunung Judi, dan dikatakan, ‘Binasalah orang-orang zalim’.”
                    
                    Setelahnya, seluruh penumpang kapal termasuk Sang Rasul sendiri bermukim di kaki Gunung Judi dan membangun kota yang dinamai Thamanin. Thamanin apabila diterjemahkan ke bahasa Indonesia artinya delapan puluh, yang disebut melambangkan jumlah orang yang ikut ke dalam bahtera. Selain itu, ada beberapa fakta lain yang perlu kamu ketahui tentang bahtera Nabi Nuh as, di antaranya:</P>
                    
                    <p>1. Dipimpin Nakhoda Tertua di Dunia dan Berlayar Tanpa Kompas
                    Saat memimpin kapal untuk berlayar, Ibnu Abbas menceritakan bahwa kala itu usia Nuh adalah 600 tahun. Angka tersebut dihitung dari pertama kali ia diutus pada kaumnya ketika berusia 480 tahun, dan masa kenabiannya sudah mencapai 120 tahun.
                    
                    Menariknya lagi, Nuh bukanlah seorang yang mengerti ilmu perbintangan. Sehingga selama berlayar, bisa dikatakan ia cuma menunggu air surut tanpa tahu ke mana nantinya bahtera yang ditumpanginya berlabuh.</p>
                    
                    
                    <p>2. Kapal Terbesar Pertama di Dunia yang Mengangkut Lebih Banyak Hewan Dibanding Manusia
                    Tampaknya jelas sekali bahwa bahtera Nabi Nuh adalah kapal terbesar pertama yang pernah ada di dunia. Ditambah lagi, bahtera itu juga merupakan yang tertinggi di dunia karena dibuat dengan tiga tingkat.
                    
                    Kapal itu juga dianggap alat angkut pertama di muka bumi yang terbuat dari kayu. Konon, kayu yang digunakan untuk membuat kapal berasal dari pohon yang ditanam sendiri oleh Nuh dan pengikutnya selama 40 tahun.
                    
                    Fakta menarik lainnya adalah, bahtera itu memuat isi yang terdiri dari lebih banyak hewan ketimbang manusia. Setidaknya hanya terdapat 80 orang penumpang yang berada di tingkat kedua, sisanya dipenuhi dengan binatang dari berbagai spesies yang sudah dijinakkan.</p>
                    
                    <p>3. Disebut sebagai Satu-satunya Kapal yang Mendarat di Gunung
                    Telah kami singgung sebelumnya kalau kapal Nabi Nuh as berlabuh di Gunung Judi atau Bukit Judi. Tempat tersebut menurut ahli tafsir bernama Maulana Yusuf Ali terletak di sebuah wilayah di Turki yang berbatasan dengan Irak dan Suriah.
                    
                    Terkait hal itu, terdapat temuan yang mengklaim kalau Gunung Judi yang dimaksud ialah Gunung Ararat di Turki. Dari puncaknya, hasil foto terhadap Gunung Ararat memperlihatkan seolah di atasnya terdapat perahu besar terdampar. Jejak mirip perahu itu setidaknya memiliki ukuran luas 7.546 kaki, panjang 500 kaki, lebar 83 kaki, dan tinggi 50 kaki.</P>
            </div>
        </section>
        <section id="cerita3" class="cerita">
            <div class="gambar">
            </div>
            <div class="teks">
                <p>Tampaknya jelas sekali bahwa bahtera Nabi Nuh adalah kapal terbesar pertama yang pernah ada di dunia. Ditambah lagi, bahtera itu juga merupakan yang tertinggi di dunia karena dibuat dengan tiga tingkat.

                    Kapal itu juga dianggap alat angkut pertama di muka bumi yang terbuat dari kayu. Konon, kayu yang digunakan untuk membuat kapal berasal dari pohon yang ditanam sendiri oleh Nuh dan pengikutnya selama 40 tahun.
                    
                    Fakta menarik lainnya adalah, bahtera itu memuat isi yang terdiri dari lebih banyak hewan ketimbang manusia. Setidaknya hanya terdapat 80 orang penumpang yang berada di tingkat kedua, sisanya dipenuhi dengan binatang dari berbagai spesies yang sudah dijinakkan.
                    Setiap kisah yang tertulis mengenai kapal besar milik Nabi Nuh dalam kitab-kitab tersebut pada intinya sama. Supaya kamu tidak bingung memahami, kami merangkum cerita seputar bahtera Nabi Nuh yang sanggup melewati badai dan banjir bandang itu berdasarkan tradisi Islam.</p>
            </div>
        </section>
        <section id="cerita4" class="cerita">
            <div class="gambar">
                <p>
                    Dari informasi yang menyebut bahtera Nabi Nuh kemungkinan berada di wilayah Turki, para peneliti pun berbondong-bondong mencari kebenarannya. Para peneliti tersebut berafiliasi dengan kelompok bernama Noah’s Ark Ministries International (NAMI) yang berbasis di Hong Kong.

Berdasarkan hasil penelusuran mereka di Gunung Ararat pada tahun 2010, lokasi yang diduga merupakan jejak kapal Nabi Nuh ditemukan. Peneliti NAMI mengklaim bahwa mereka menemukan bahtera Nuh di Gunung Ararat yang berada di ketinggian 13.000 kaki di atas permukaan laut.

“Saya dan tim pencarian memasuki sendiri struktur kayu raksasa di gunung tersebut. Kami yakin bahwa struktur kayu yang kami jelajahi sama dengan yang tercatat dalam sejarah bahtera kuno yang sama dengan yang dibicarakan penduduk setempat,” terang salah satu anggota tim, Man-fai Yuen seperti dilansir National Geographic.

Namun, hasil temuan itu dibantah oleh peneliti dari komunitas ilmiah lain yang mempunyai jaringan lebih luas. Para arkeolog yang ahli di bidangnya mengaku skeptis terhadap klaim mengenai penemuan kapal Nabi Nuh, mengingat kitab suci tidak menyebutkan secara spesifik di mana bahtera itu berlabuh.

“Jika ada banjir yang mampu mengangkat kapal besar sejauh 4 kilometer di atas gunung, 4.800 tahun lalu, saya pikir pasti akan ada bukti geologis yang substansial mengenai banjir ini di seluruh dunia, tapi ini tidak ada,” sanggah seorang arkeolog asal Inggris bernama Mike Pitt.
                </p>
            </div>
            <div class="teks">
                <img src="gambar 3.png" alt="gambar cerita 4">
            </div>
        </section>
    </div>
</body>
</html>
