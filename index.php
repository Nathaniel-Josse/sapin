<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sapin</title>
</head>
<body>
    <?php include "include/Sapin.php";?>
    <h1>Joyeuses Fêtes 🎅</h1>
    <?php $sapin = new Sapin();
    $sapin->sapin(); ?>
</body>
</html>