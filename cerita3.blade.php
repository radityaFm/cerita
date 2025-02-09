    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cerita 3</title>
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
    background-color: rgba(0, 0, 0, 0.7);
    position: fixed;
    top: 0;
    right: 0;
    width: 200px;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    z-index: 100;
}
.masuk-list-siswa{
      display: block;
      background-color: #333; /* Warna tombol */
      color: #fff; /* Warna teks tombol */
      border: 11px;
      border-radius: 15px;
      padding: 8px 12px;
      cursor: pointer;
      margin-top: 60px;
       }
       .tombol-pindah-halaman {
    display: block;
    background-color: #333; /* Warna tombol */
    color: #fff; /* Warna teks tombol */
    border: 11px;
    border-radius: 15px;
    padding: 8px 12px;
    cursor: pointer;
    margin-top: 20px;
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
}

.content {
    padding: 100px 220px;
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
    font-size: small;
    text-align: justify;
    text-indent: 0.5in;
    color: black;
}
h1{
    color:aquamarine;
}
h2{
    font-size: small;
    text-align: center;
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
    <nav class="menu">
        <ul>
            <li><a href="#cerita1">Cerita 1</a></li>
            <li><a href="#cerita2">Cerita 2</a></li>
            <li><a href="#cerita3">Cerita 3</a></li>
            <li><a href="#cerita4">Cerita 4</a></li>
        </ul>
    </nav>
    <div class="background"></div>
    <div class="content">
        <header>
            <h1>Nama mu adalah</h1>
        </header>
        <section id="cerita1" class="cerita">
         <p>Mitsuha Miyamizu, seorang siswi sekolah menengah atas yang tinggal di desa fiktif bernama Itomori di daerah pegunungan Hida Prefektur Gifu, mulai bosan dengan kehidupannya di pedesaan tempat dia lahir dan berharap dapat terlahir menjadi pemuda tampan yang hidup di Tokyo pada kehidupan selanjutnya. Kemudian, Taki Tachibana, seorang siswa sekolah menengah atas yang tinggal di Tokyo, terbangun dari tidurnya dan menyadari bahwa dirinya adalah Mitsuha, yang entah bagaimana bisa masuk ke dalam tubuh Taki
            Taki dan Mitsuha menyadari bahwa mereka berdua saling memasuki tubuh satu sama lain. Mereka mulai berkomunikasi satu sama lain dengan saling meninggalkan catatan di kertas maupun melalui memo di ponsel mereka. Seiring dengan berjalannya waktu, mereka semakin terbiasa dengan pertukaran tubuh ini serta mulai mencampuri kehidupan satu sama lain. Mitsuha membantu Taki untuk menjalin hubungan dengan seorang wanita rekan kerjanya yang bernama Miki Okudera, sehingga akhirnya Taki dapat berkencan dengan Miki. Sementara itu, Taki membantu Mitsuha agar lebih dikenal di sekolahnya. Mitsuha kemudian memberitahu Taki mengenai sebuah komet yang diramalkan akan melintas dekat Bumi dalam beberapa hari mendatang, dan betapa tertariknya dirinya untuk dapat melihatnya, karena waktunya bertepatan dengan festival di Desa Itomori.</p>
        </section>
        <section id="cerita2" class="cerita">
            <p>Pada suatu saat, nenek dari Mitsuha bertanya kepada Taki yang berada di dalam tubuh Mitsuha, "Kamu masih bermimpi, kan?", dan bercerita bahwa keturunan Miyamizu terkadang mengalami mimpi tentang kehidupan orang lain. Keesokannya, Taki tiba-tiba kembali terbangun di tubuhnya sendiri. Saat bertemu dengan Miki, kencannya berakhir gagal. Miki meninggalkan Taki, mengatakan bahwa dirinya menyadari bahwa ada orang lain yang dipikirkan oleh Taki. Semenjak itu, Taki dan Mitsuha tidak pernah bertukar tubuh lagi. Taki kemudian mencoba menghubungi Mitsuha, namun tidak berhasil. Dia akhirnya memutuskan untuk menemui Mitsuha secara langsung dengan mengunjungi tempat kelahirannya.       
                Tanpa mengetahui apa nama desa Mitsuha dan di mana lokasinya, Taki melakukan perjalanan ke berbagai daerah di Hida, dengan hanya mengandalkan sketsa pemandangan desa yang dia lukis berdasarkan ingatannya. Akhirnya, di sebuah restoran yang dia kunjungi bersama Miki dan teman sekolahnya Tsukasa Fujii, seorang pelayan mengenali sketsa Taki sebagai Desa Itomori, dan mengatakan bahwa desa tersebut dahulunya sangat indah. Namun kini desa tersebut dan wilayah di sekitarnya telah hancur serta menjadi kawah raksasa karena dihantam pecahan komet Tiamat yang jatuh tiga tahun lalu. Saat membaca catatan kejadian, Taki menyadari bahwa kejadian ini telah menewaskan sepertiga penduduk. Taki juga menemukan nama Mitsuha dan juga kedua temannya, Katsuhiko Teshigawara dan Sayaka Natori, yang tertera dalam daftar korban. Taki kemudian diantarkan oleh pelayan tersebut menuju lokasi kawah. Di sana, Taki mencari memo yang pernah Mitsuha buat pada ponselnya untuk memastikan bahwa dirinya tidak sedang bermimpi. Namun ternyata semuanya telah menghilang.
                </p>
        </section>
        <section id="cerita3" class="cerita">
            <div class="gambar">
                <img src="gambar5.png" alt="Gambar Cerita 3">
            </div>
            <div class="teks">
                <p>Berusaha agar dapat terhubung kembali dengan Mitsuha, Taki kemudian memberanikan dirinya untuk pergi seorang diri ke kuil keluarga Mitsuha yang terletak di sebuah gunung dekat Itomori. Menyadari bahwa linimasa dirinya dan Mitsuha sebenarnya terpaut beberapa tahun selama ini, Taki meminum kuchikami-zake, sejenis arak beras yang dibuat dengan cara mengunyah nasi di dalam mulut, yang pernah dibuat oleh Mitsuha saat menjalani tradisi gadis kuil dan ditinggalkan di dalam kuil tersebut sebagai persembahan. Dia berharap dapat terhubung kembali dengan tubuh Mitsuha sebelum komet menghantam. Taki berhasil terbangun di tubuh Mitsuha pada pagi hari sebelum festival</p>
            </div>
        </section>
        <section id="cerita4" class="cerita">
            <div class="teks">
                <p> dan menyadari bahwa dia masih punya waktu untuk menyelamatkan desa tersebut. Dia meyakinkan teman-teman Mitsuha perihal komet tersebut dan meminta bantuan mereka untuk mengevakuasi desa. Sambil menjalani rencananya, Taki menyadari bahwa Mitsuha juga berusaha mencarinya dengan menaiki kereta api ke Tokyo, dan mungkin kini Mitsuha sedang berada di tubuhnya di dalam kuil. Taki kemudian mengunjungi kembali gunung tempat kuil tersebut berada untuk menemui Mitsuha.</p>
                <p>Sebelumnya, Mitsuha tidak dapat menemukan Taki di Tokyo dan kembali ke desanya dengan perasaan sedih. Dalam perjalanan, Mitsuha kemudian bertemu dan mengenali Taki. Namun karena linimasa dirinya sebenarnya berada di masa lampau, Taki tidak dapat mengenalinya. Kini Mitsuha terbangun kembali dalam tubuh Taki yang berada di dalam kuil keluarganya, lalu naik ke puncak gunung. Taki pun sudah tiba di puncak gunung. Meskipun mereka dapat merasakan keberadaan satu sama lain, mereka tidak dapat saling melihat satu sama lain karena berada di masa yang berbeda. Saat matahari mulai terbenam, baik Taki dan Mitsuha menyadari bahwa ini adalah waktunya kataware,[a] sehingga mereka kembali ke tubuh masing-masing, dan dapat saling melihat satu sama lain. Taki mengingatkan Mitsuha untuk meyakinkan ayahnya yang merupakan Wali Kota Itomori untuk mengevakuasi seluruh desa. Mereka juga memutuskan untuk saling menuliskan nama mereka di tangan mereka agar mereka tidak melupakannya ketika kembali ke linimasa asli mereka masing-masing setelah matahari terbenam. Sebelum Mitsuha sempat menuliskan namanya, matahari sudah terbenam, dan mereka kembali terpisah. Seiring dengan berjalannya waktu, ingatan mereka perlahan mulai menghilang, dan pada akhirnya mereka tidak dapat lagi mengingat nama satu sama lain serta peristiwa-peristiwa yang telah mereka alami. Dalam upaya terakhirnya, Mitsuha membuka telapak tangannya, dan menyadari yang Taki tuliskan bukanlah namanya, tapi "Aku mencintaimu". Dengan penuh keyakinan dan semangat baru, Mitsuha kembali menemui ayahnya sebelum pecahan komet jatuh dan menghantam Itomori.</p></p>
                <p>Delapan tahun kemudian, terungkap bahwa Mitsuha berhasil membujuk ayahnya untuk melakukan evakuasi terhadap penduduk di distrik sekitarnya sehingga penduduk Desa Itomori berhasil diselamatkan tepat waktu. Sementara itu, Taki yang telah lulus dari universitas dan sedang mencari pekerjaan, memiliki perasaan bahwa ada sesuatu yang hilang pada dirinya. Dia menemukan bahwa dirinya tertarik dengan hal-hal yang berkaitan dengan Itomori, seperti majalah dan penduduk yang dirasanya familiar, yang sebenarnya pernah dia temui saat berada di tubuh Mitsuha. Saat bepergian dengan kereta api yang terpisah, Taki dan Mitsuha saling tertegun melihat satu sama lain ketika kedua kereta tersebut berpapasan. Mereka kemudian turun di pemberhentian selanjutnya untuk saling mencari satu sama lain. Akhirnya mereka saling bertemu di sebuah tangga, dan karena mereka merasa sepertinya saling mengenal, mereka saling menanyakan nama.</p>
            </div>
        </section>
    </div>
    <div>
        <a href="cerita4.html">
            <button type="button" class="masuk-list-siswa">Selanjutnya</button>
        <a href="cerita2.html">
            <button type="button" class="tombol-pindah-halaman">Kembali</button>
    </div>
</body>
</html>

</body>
</html>