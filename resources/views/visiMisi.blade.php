<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../images/Logo-kabupaten.JPG" type="image/x-icon">
    <title>Tukluk | Kerjolor</title>
    <link rel="stylesheet" href=../css/visi-misi.css>
    <script src="../js/sidebar.js"></script>
</head>
<body>
    <nav>
        <ul class="sidebar">
            <li onclick=hideSidebar()><a><img src="../images/close.png" alt="" height="26"></a></li>
            <li><a href="#">Profile</a>
                <ul class="dropProfile">
                    <li><a href="/j">Visi Misi</a></li>
                    <li><a href="/k">Sejarah</a></li>
                    <li><a href="/k">Geografis</a></li>
                    <li><a href="/k">Demografi</a></li>
                </ul>
            </li>
            <li><a href="/das">Kelembagaan</a></li>
            <li><a href="/potensi">Potensi</a></li>
            <li><a href="/kegiatan">Kegiatan</a></li>
            <li><a href="/">Berita</a></li>
        </ul>
        <ul>
            <li class="logo"><img src="images/Logo-kabupaten.JPG" alt="" height="70px"></li>
            <li class="hideOnMobile"><a href="/dashboard">Beranda</a></li>
            <li class="hideOnMobile"><a href="#">Profile Desa</a>
            <ul class="dropProfile">
                <li><a href="/k">Struktur Organisasi</a></li>
                <li><a href="/Profile-desa/visi-misi">Visi Misi</a></li>
                <li><a href="/k">Sejarah</a></li>
                <li><a href="/k">Geografis</a></li>
                <li><a href="/k">Demografi</a></li>
            </ul>
            </li>
            <li class="hideOnMobile"><a href="/nj">Kelembagaan</a>
                <ul class="dropProfile">
                    <li><a href="/j">truktur</a></li>
                    <li><a href="/k">Sejarah</a></li>
                    <li><a href="/k">Geografis</a></li>
                    <li><a href="/k">Demografi</a></li>
                </ul>
            </li>
            <li class="hideOnMobile"><a href="/jhj">Potensi</a></li>
            <li class="hideOnMobile"><a href="/jh">Kegiatan</a></li>
            <li class="hideOnMobile"><a href="/hjh">Berita</a></li>
            <li class="hideOnMobile"><a href="/hjh">Produk Hukum</a></li>

            <li class="menuButton" onclick=showSidebar()><a><img src="images/menu.png" alt="" height="26"></a></li>
        </ul>
    </nav>
</body>
</html>