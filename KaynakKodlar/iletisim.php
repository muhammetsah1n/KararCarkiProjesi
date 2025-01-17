<?php
    session_start(); 
?>

<html>

    <head>

        <meta charset="UTF-8">

        <title>Karar Çarkı</title>

        <link rel="icon" href="fotograflar/logoPng.png">
        <link rel="stylesheet" href="iletisim.css?v=<?php echo time(); ?>">
        <script src="iletisim.js?v=<?php echo time(); ?>" defer></script>

    </head>

    <body>

        <header>

            <div class="logo" id="logo">

                <img src="fotograflar/logo.png" height="80" width="82" title="Ana Sayfa">
                <h1>KARAR ÇARKI</h1>

            </div>

            <img src="fotograflar/iletisim.png" height="70" width="72" title="İletişim" class="iletisim" id="iletisim">

        </header>

        <div class="mesaj">
            <i><b>Bizimle İletişime Geçin !</b></i>
        </div>

        <div class="kutu">

            <form autocomplete="off" action="kayit.php" method="post"> 

                <table>

                    <tr>
                        <td>
                            <label for="isim">İsim</label><br>
                            <input type="text"name="name" required><br>
                        </td>
                        <td>
                            <label for="soyisim">Soyisim</label><br>
                            <input type="text"name="surname" required><br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label for="email">E-mail</label><br>
                            <input type="email" name="email" class="inputEmail" required><br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label for="gorusler">Mesajınız</label><br>
                            <textarea name="message" rows="10" cols="30"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="Gönder" class="button" id="button">
                        </td>
                    </tr>

                </table>

            </form>

            <div class="container">

                <div class="sosyalMedya" id="linkedin">

                    <img src="fotograflar/linkedinLogo.png" height="29" width="29" title="Linkedin">Muhammet Şahin

                </div>

                <div class="sosyalMedya" id="github">

                    <img src="fotograflar/githubLogo.png" height="29" width="29" title="GitHub">@muhammetsah1n

                </div>
                
                <div class="sosyalMedya email" id="email">

                    <img src="fotograflar/ePostaLogo.png" height="29" width="39" title="E-mail">muhammetsah1n.2105@gmail.com

                </div>

            </div>

        </div>

        <?php

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "cark";

                $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

                $stmt = $pdo->query("SELECT * FROM users ORDER BY id DESC");
                $veriler = $stmt->fetchAll(PDO::FETCH_ASSOC);

        ?>

        <div class="secondBox">

            <div class="mesaj2">
                <i><b>Ziyaretçilerden Son Yorumlar ;</b></i>
            </div>

            <div class="innerBox">

                <?php foreach ($veriler as $veri): ?>

                    <div class="commentBox">
                        <div class="name"><img src="fotograflar/pp.png" height="19" width="19">
                            <?= htmlspecialchars($veri['name']).' '.htmlspecialchars($veri['surname']);?>
                            <div class="date"><?= htmlspecialchars(date('d/m/Y', strtotime($veri['created_at']))) ?>&nbsp;&nbsp;<?= htmlspecialchars(date('H.i', strtotime($veri['created_at']))) ?></div>
                        </div>
                        <div class="comment"><?= htmlspecialchars($veri['message']);?>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>

            </div>

        </div>

        <div class="popup" id="popup">

            <div class="sonucKutusu" id="sonucKutusu">

                <div class="closeButton" id="closeButton">&times;</div>
                <div class="sonucMetni">Yanıtınız Başarıyla Kaydedildi!</div>

            </div>

        </div>

    </body>

</html>

<?php

    if (isset($_SESSION['success'])) {
        if ($_SESSION['success']===true){
            echo "<script>

                    popup.style.display = 'block';

                </script>";
        }
    }

    unset($_SESSION['success']);

    exit();

?>
