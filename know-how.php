<?php include 'includes/nav.php'; ?><
!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know How - ODADOZ</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <!-- Navigační panel -->
    <?php include 'nav.php'; ?>

    <div class="section">
        <h2>Know How</h2>
        <div class="product-grid">
            <div class="product-card">
                <img src="images/kreativita.jpg" alt="Kreativita">
                <h3>Kreativita</h3>
                <p>Rozvoj kreativity u dětí.</p>
                <button class="toggle-button">Čtěte více</button>
                <div class="hidden">
                    <p>Naučíme vás metody, jak rozvíjet kreativní myšlení u dětí skrze hry a aktivity.</p>
                    <button class="btn-download">Objednat</button>
                </div>
            </div>
            <div class="product-card">
                <img src="images/technika.jpg" alt="Technika">
                <h3>Technika</h3>
                <p>Základy technických dovedností.</p>
                <button class="toggle-button">Čtěte více</button>
                <div class="hidden">
                    <p>Praktické lekce zaměřené na technické dovednosti, které pomohou dětem i rodičům.</p>
                    <button class="btn-download">Objednat</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>
</html>
<?php include 'includes/footer.php'; ?>