<html>

    <head>

        <meta charset="UTF-8">

        <title>Karar Çarkı</title>

        <link rel="icon" href="fotograflar/logoPng.png">
        <link rel="stylesheet" href="besliCarkSayfasi.css?v=<?php echo time(); ?>">
        <script src="besliCarkSayfasi.js?v=<?php echo time(); ?>" defer></script>

    </head>

    <body>

        <header>

            <div class="logo" id="logo">

                <img src="fotograflar/logo.png" height="80" width="82" title="Ana Sayfa">
                <h1>KARAR ÇARKI</h1>

            </div>

            <img src="fotograflar/iletisim.png" height="70" width="72" title="İletişim" class="iletisim" id="iletisim">

        </header>

        <div class="kutu"> <!-- OMG! -->

            <div class="container">

                <div class="spinButton" id="spinButton">SPIN</div>
                <div class="arrow"><img src="fotograflar/arrow.png" height="40" width="54"></div>

                <div class="wheel">

                    <div class="secenek1"><div class="text" id="secenek1"></div></div>
                    <div class="secenek2"><div class="text" id="secenek2"></div></div>
                    <div class="secenek3"><div class="text" id="secenek3"></div></div>
                    <div class="secenek4"><div class="text" id="secenek4"></div></div>
                    <div class="secenek5"><div class="text" id="secenek5"></div></div>

                </div>

            </div>

        </div>

        <div class="popup" id="popup"> <!-- OMG! -->
            
            <div class="sonucKutusu">

                <div class="closeButton" id="closeButton">&times;</div>
                <div class="sonucMetni" id="sonucMetni"></div>

            </div>

        </div>
        

    </body>

</html>