<?php include 'includes/nav.php'; ?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktuality - ODADOZ</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <!-- Navigační panel -->
    <?php include 'nav.php'; ?>

    <div class="section">
        <h2>Aktuality</h2>
        <div class="update">
            <h3>Táborové přihlášky otevřeny</h3>
            <p>Datum: 20. 11. 2024</p>
            <button class="toggle-button">Čtěte více</button>
            <div class="hidden">
                <p>Začínáme s přihlašováním na letní tábory. Těšíme se na vás!</p>
            </div>
        </div>
        <div class="update">
            <h3>Nový zájmový kroužek</h3>
            <p>Datum: 15. 11. 2024</p>
            <button class="toggle-button">Čtěte více</button>
            <div class="hidden">
                <p>Přidali jsme nový kroužek pro malé techniky. Přihlaste se!</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>
</html>
<?php include 'includes/footer.php'; ?>