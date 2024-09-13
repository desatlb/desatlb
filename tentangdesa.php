<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>desatlb</title>
    <link rel="stylesheet" href="csstentangdesa.css">
    <style>
        body {
            background-color: lightblue;
        }

        .badan-utama {
            max-width: 1080px;
            margin: 20px auto;
            background-color: white;
            padding: 15px;
            overflow: hidden;
        }

        header {
            background-color: navy;
            color: white;
            padding: 20px;
        }

        header h2 {
            margin-bottom: 7px;
            font-size: 35px;
        }

        .navigasi ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: deepskyblue;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            font-weight: bold;
        }

        .navigasi li {
            float: left;
        }

        .navigasi li a {
            display: block;
            color: white;
            text-align: center;
            padding: 10px 20px;
            text-decoration: none;
        }

        .navigasi li a:hover {
            background-color: royalblue;
            transition-duration: 2s;
        }

        .banner {
            margin-bottom: 15px;
        }

        .banner img {
            display: block;
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        .kotak {
            border: 1px solid lightblue;
            padding: 10px;
            margin-bottom: 15px;
        }

        .kotak p {
            cursor: pointer;
            margin: 5px 0;
        }

        .nomor-hp {
            display: none;
            margin-left: 10px;
            color: blue;
        }

        .kotak h3 {
            background-color: navy;
            color: white;
            text-align: center;
            padding: 10px;
            margin-bottom: 13px;
        }

        .kotak h2 {
            background-color: gray;
            color: white;
            text-align: center;
            padding: 15px;
            margin-bottom: 13px;
        }

        .kotak img, .kotak video {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        .menu-kiri {
            width: 250px;
            margin-right: 10px;
            float: left;
        }

        .menu-tengah {
            width: 100%;
            float: none;
            margin-bottom: 15px;
        }

        .tanggal-posting {
            color: gray;
            text-align: right;
            font-size: 12px;
            margin-bottom: 10px;
            display: block;
        }

        .tombol {
            display: block;
            text-decoration: none;
            padding: 10px;
            width: 120px;
            color: white;
            border-radius: 5px;
            text-align: center;
        }

        .tombol:hover {
            background-color: darkblue;
            transition-duration: 2s;
        }

        .tombol-pesan {
            background-color: mediumseagreen;
        }

        .tombol-lengkap {
            background-color: deepskyblue;
        }

        .menu-kanan {
            width: 250px;
            float: left;
        }

        footer {
            clear: both;
            background-color: navy;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .menu-artikel ul {
            list-style-type: none;
        }

        .menu-artikel ul li a {
            text-decoration: none;
            display: block;
            padding: 13px;
            border-bottom: 1px solid lightblue;
            margin-bottom: 12px;
            color: black;
        }

        .menu-artikel ul li a:hover {
            color: deepskyblue;
            border-bottom: 5px double royalblue;
            transition-duration: 2s;
        }

        .teks-terpotong {
            max-height: 150px;
            overflow: hidden;
            position: relative;
        }

        .teks-lengkap {
            display: none;
        }

        @media screen and (max-width:1080px) {
            .badan-utama {
                width: 100%;
            }

            .menu-kiri {
                width: 25%;
            }

            .menu-tengah {
                width: 68%;
                float: right;
            }

            .menu-kanan {
                clear: both;
                float: none;
                width: 100%;
            }
        }

        @media screen and (max-width:780px) {
            header h2, header p {
                text-align: center;
            }

            .menu-kiri, .menu-kanan, .menu-tengah {
                float: none;
                width: 100%;
            }

            .navigasi li {
                float: none;
            }
        }

        .link {
            color: white;
            text-decoration: none;
        }

        .link:hover {
            text-decoration: underline;
        }

        .kotak video {
    width: 80%; /* Atur persentase sesuai kebutuhan */
    height: auto; /* Agar tetap menjaga rasio */
    display: block;
    margin: 0 auto;
}

    </style>
</head>
<body>
    <div class="badan-utama">
        <nav class="navigasi">
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="tentangdesa.php">Program Kerja</a></li>
            </ul>
        </nav>

        <div class="banner">
            <img src="f/kantordesa.jpeg" alt="desa">
        </div>

        <div class="menu-tengah">
            <div class="kotak">
                <h2>Program Kerja Universitas Labuhanbatu</h2>
            </div>
        </div>

        <div class="menu-tengah" id="video1">
            <div class="kotak">
                <h3>Mengajar Ngaji Bersama Anak-anak Desa</h3>
                <video controls>
                    <source src="vidio/16ags.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="menu-tengah" id="video2">
            <div class="kotak">
                <h3>Upacacara 17 Agustus yang ke 79 Di Desa Tebing Linggahara Baru</h3>
                <video controls>
                    <source src="vidio/17ags.MOV" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="menu-tengah">
            <div class="kotak">
                <h3>Pawai Di Desa Tebing Linggahara Baru</h3>
                <video controls>
                    <source src="vidio/17agss.MOV" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="menu-tengah">
            <div class="kotak">
                <h3>Mengajar Les Bersama Anak-anak Desa</h3>
                <video controls>
                    <source src="vidio/19ags.MOV" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="menu-tengah" id="video3">
            <div class="kotak">
                <h3>Senam Bersama Anak Sekolah dan ibu-ibu Desa Tebing Linggahara Baru</h3>
                <video controls>
                    <source src="vidio/23ags.MOV" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="menu-tengah">
            <div class="kotak">
                <h3>Membantu Masyarakat Yang Sedang Kemalangan</h3>
                <video controls>
                    <source src="vidio/24ags.MOV" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="menu-tengah">
            <div class="kotak">
                <h3>Membuat Rumah rumahan Hantaran untuk Lamaran</h3>
                <video controls>
                    <source src="vidio/24agss.MOV" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="menu-tengah" id="video4">
            <div class="kotak">
                <h3>Pembelajaran Di SMPN1 Bila Barat Tentang Informatika</h3>
                <video controls>
                    <source src="vidio/29ags.MOV" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="menu-tengah">
            <div class="kotak">
                <h3>Pelatihan Komputer Di SMPN1 Bila Barat</h3>
                <video controls>
                    <source src="vidio/29ags.MP4" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="menu-tengah">
            <div class="kotak">
                <h3>Menanam Pohon Kelapa Hibrida</h3>
                <video controls>
                    <source src="vidio/29agss.MOV" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="menu-tengah">
            <div class="kotak">
                <h3>Memperkenalkan Produk Sprai Anti Nyamuk Serai di Pengajian Ibu-ibu</h3>
                <video controls>
                    <source src="vidio/30ags.MOV" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="menu-tengah">
            <div class="kotak">
                <h3>Masak-masak Bersama Ibu-ibu Desa Tebing Linggahara Baru</h3>
                <video controls>
                    <source src="vidio/6seep.MP4" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="menu-tengah">
            <div class="kotak">
                <h3>Membuat Minuman Herbal Menggunakan Bunga Telang</h3>
                <video controls>
                    <source src="vidio/6sep.MOV" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="menu-tengah">
            <div class="kotak">
                <h3>Senam Pagi Di Kantor Desa Tebing Linggahara Baru</h3>
                <video controls>
                    <source src="vidio/6sep.MP4" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="menu-tengah">
            <div class="kotak">
                <h3>Memasak Makanan Untuk Jum'at Berkah</h3>
                <video controls>
                    <source src="vidio/6sepp.MP4" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="menu-tengah" id="video5">
            <div class="kotak">
                <h3>Sosialisasi Produk UMKM Spai Anti Nyamuk Serai</h3>
                <video controls>
                    <source src="vidio/6seppp.MP4" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="menu-tengah">
            <div class="kotak">
                <h3>Menanam Kangkung Di Dusun Tanjung Raya</h3>
                <video controls>
                    <source src="vidio/8sep.MP4" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="menu-tengah">
            <div class="kotak">
                <h3>Mempupuk Bibit Kangkung Di Dusun Tanjung Raya</h3>
                <video controls>
                    <source src="vidio/8sep.MOV" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="menu-kanan">
        <div class="kotak">
            <h3>Contact Person</h3>
            <p class="x" onclick="toggleNumber('sibarabara')">Kadus Sibarabara <br> <span id="sibarabara" class="nomor-hp">: 0813-6197-4520</span></p>
            <p class="x" onclick="toggleNumber('suka-makmur')">Kadus Suka Makmur <br> <span id="suka-makmur" class="nomor-hp">: 0853-6038-1110</span></p>
            <p class="x" onclick="toggleNumber('suka-ramai')">Kadus Suka Ramai <br> <span id="suka-ramai" class="nomor-hp">: 0852-7180-0228</span></p>
            <p class="x" onclick="toggleNumber('tapian-nauli')">Kadus Tapian Nauli <br> <span id="tapian-nauli" class="nomor-hp">: 0821-6497-2863</span></p>
            <p class="x" onclick="toggleNumber('gunung-raya')">Kadus Gunung Raya <br> <span id="gunung-raya" class="nomor-hp">: 0813-1402-4975</span></p>
            <p class="x" onclick="toggleNumber('danau-biale')">Kadus Danau Biale <br> <span id="danau-biale" class="nomor-hp">: 0812-6423-4748</span></p>
            <p class="x" onclick="toggleNumber('tanjung-raya')">Kadus Tanjung Raya <br> <span id="tanjung-raya" class="nomor-hp">: 0813-7538-2767</span></p>
        </div>
    </div>

        <footer>
            <p>© 2024 KKN_TebingLinggaharaBaru24 | Universitas Labuhanbatu</p>
            <a class="link" href="https://www.instagram.com/kkn_desatebinglinggaharabaru24?igsh=MWYyMWx4ejI3ZGpuNg==" target="_blank">
                <img src="ig.png" alt="Instagram Logo" style="width: 24px; height: 24px; vertical-align: middle; margin-right: 8px;">
                kkn_desatebinglinggaharabaru24
            </a>
            <a class="link" href="https://www.tiktok.com/@kkn_linggaharabaru24?_t=8pPOo0mHTEn&_r=1" target="_blank">
                <img src="tiktok.png" alt="Instagram Logo" style="width: 24px; height: 24px; vertical-align: middle; margin-right: 8px;">
                kkn_desatebinglinggaharabaru24
            </a>
        </footer>
    </div>

    <script>
        function toggleNumber(id) {
            var span = document.getElementById(id);
            if (span.style.display === "none") {
                span.style.display = "inline";
            } else {
                span.style.display = "none";
            }
        }
    </script>
</body>
</html>
