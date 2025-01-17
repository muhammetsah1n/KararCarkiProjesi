<html>

    <head>

        <meta charset="UTF-8">

        <title>Karar Çarkı</title>

        <link rel="icon" href="fotograflar/logoPng.png">
        <link rel="stylesheet" href="besliGirdiSayfasi.css?v=<?php echo time(); ?>">
        <script src="besliGirdiSayfasi.js?v=<?php echo time(); ?>" defer></script>

    </head>

    <body>

        <header>

            <div class="logo" id="logo">

                <img src="fotograflar/logo.png" height="80" width="82" title="Ana Sayfa">
                <h1>KARAR ÇARKI</h1>

            </div>

            <img src="fotograflar/iletisim.png" height="70" width="72" title="İletişim" class="iletisim" id="iletisim">

        </header>

        <div class="kutu">

            <div class="mesaj">
                <i><b>5 adet girdinizi sağ tarafa ekledikten sonra "Gönder" butonuna basınız.</b></i>
            </div>

            <div class="girdiler">

                <input type="text" maxlength="20" placeholder="Seçenek 1" class="secenek" id="secenek1" autocomplete="off">
                <input type="text" maxlength="20" placeholder="Seçenek 2" class="secenek" id="secenek2" autocomplete="off">
                <input type="text" maxlength="20" placeholder="Seçenek 3" class="secenek"id="secenek3" autocomplete="off">
                <input type="text" maxlength="20" placeholder="Seçenek 4" class="secenek"id="secenek4" autocomplete="off">
                <input type="text" maxlength="20" placeholder="Seçenek 5" class="secenek" id="secenek5" autocomplete="off">

                <button id="button">Gönder</button>

            </div>

        </div>

    </body>

</html>
