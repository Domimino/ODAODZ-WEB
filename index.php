<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODADOZ - Domovská stránka</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <!-- Navigační panel -->
    <?php include 'includes/nav.php'; ?>

    <!-- Hlavní obsah -->
    <header class="header">
        <div class="header-image">
            <div class="header-content">
                <h1>Vítejte na stránkách ODADOZ</h1>
                <a href="nabidka.php" class="btn-apply">Naše Nabídka</a>
            </div>
        </div>
    </header>

    <div class="home-sections">
        <!-- Aktuality -->
        <div class="aktuality">
            <h2>Aktuality</h2>
            <div class="slider">
                <div class="slide">
                    <img src="images/aktualita1.jpg" alt="Aktualita 1">
                    <p>Tábory - zábava pro děti všech věkových kategorií.</p>
                </div>
                <div class="slide">
                    <img src="images/aktualita2.jpg" alt="Aktualita 2">
                    <p>Kulturní akce - inspirativní programy pro rodiny.</p>
                </div>
            </div>
        </div>

        <!-- O nás -->
        <div class="about-us">
            <h2>O Nás</h2>
            <div class="about-us-grid">
                <div class="about-us-image">
                    <img src="images/Dominik_a_Zuzana.jpg" alt="Dominik a Zuzana">
                </div>
                <div class="about-us-content">
                    <p>Jsme ODADOZ, organizace plná nápadů, která se věnuje dětem a rodičům.</p>
                    <a href="o-nas.php">Čtěte více</a>
                </div>
            </div>
        </div>

        <!-- Know How -->
        <div class="know-how">
            <h2>Know How</h2>
            <div class="know-how-grid">
                <div class="know-how-content">
                    <p>Naše zkušenosti a dovednosti sdílíme s vámi.</p>
                    <a href="know-how.php">Zjistěte více</a>
                </div>
                <div class="know-how-image">
                    <img src="images/equipment.jpg" alt="Know How">
                </div>
            </div>
        </div>

        <!-- Přihlášky -->
        <div class="join-us">
            <h2>Přidejte se k nám!</h2>
            <a href="https://docs.google.com/forms/d/1FvI_uYw4dIrJ4HhNa1x6xmPXDn7zcGB9ljuYXdKiRPk/" target="_blank" class="btn-apply">Přihlášky</a>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
