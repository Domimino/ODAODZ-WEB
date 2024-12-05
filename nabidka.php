<?php include 'includes/nav.php'; ?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nabídka - ODADOZ</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <!-- Navigační panel -->
    <?php include 'nav.php'; ?>

    <div class="section">
        <h2>Naše Nabídka</h2>
        <div class="offer-card">
            <img src="images/zajmove_utvary.jpg" alt="Zájmové útvary">
            <div>
                <h3>Zájmové útvary</h3>
                <p>Pro děti s rozvojem kreativity.</p>
                <button class="toggle-button">Čtěte více</button>
                <div class="hidden">
                    <p>Detailní popis našich zájmových útvarů, jejich cíle a možnosti přihlášení.</p>
                </div>
            </div>
        </div>
        <div class="offer-card">
            <img src="images/kulturni_akce.jpg" alt="Kulturní akce">
            <div>
                <h3>Kulturní akce</h3>
                <p>Vytváříme nezapomenutelné zážitky.</p>
                <button class="toggle-button">Čtěte více</button>
                <div class="hidden">
                    <p>Detailní informace o našich kulturních akcích a plánovaných událostech.</p>
                </div>
            </div>
        </div>
        <div class="offer-card">
            <img src="images/tabory.jpg" alt="Tábory">
            <div>
                <h3>Tábory</h3>
                <p>Zábava a učení pro děti.</p>
                <button class="toggle-button">Čtěte více</button>
                <div class="hidden">
                    <p>Popis táborů, jejich náplň, termíny a jak se přihlásit.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>
</html>
<?php include 'includes/footer.php'; ?>