<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Krpl</title>
  <link rel="stylesheet" href="home.html">
  <style>
    @font-face{
        font-family: "font";
        src: url(font.ttf);
    }
  body {
    font-family: 'font';
    background-color: #ded8d8; /* Warna latar belakang */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    
}
.kelas {
    max-width: 80%;
    background-color: #cbc0c0; /* Warna div kelas */
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 9px 8px rgba(0, 0, 0, 0.2);
    font-family: sans-serif;
}

.kelas img {
    display: block;
    max-width: 100%;
    border-radius: 8px;
    margin-bottom: 20px;
}

.kelas-detail h2 {
    margin-top: 0;
    font-size: 24px;
    color: #333; /* Warna teks kelas */
    font-style: bold;
    font-family: Arial, sans-serif;
}

.kelas-detail p {
    margin: 8px 0;
    color: #555; /* Warna teks detail */
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
.right-button{
    display: block;
    background-color: #333; /* Warna tombol */
    color: #fff; /* Warna teks tombol */
    border: 11px;
    border-radius: 15px;
    padding: 8px 12px;
    cursor: pointer;
    margin-top: 8px;
}
h2{
    font-family: sans-serif;
}
</style>
</head>
<body>
    <div class="kelas">
        <img src="pict 1.png" alt="Gambar image ">
        <div class="kelas-detail">
            <h2>Tugas mandiri cerita rakyat</h2>
            <p>by : Raditya febriandaru</p>
            <p>Jangan di hujat bang, saya masih pemula</p>
            <div>
                <a href="cerita1.html">
                    <button type="button" class="masuk-list-siswa">Masuk</button>
            </div>
            </p>
        </div>
    </div>
</body>
</html>