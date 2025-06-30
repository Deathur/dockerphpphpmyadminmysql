<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
    echo 'Vous utilisez Firefox.';
    }
    if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
    echo 'Vous utilisez Google Chrome.';
    }
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ||
    strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) {
    echo 'You are using Internet Explorer.<br />';
    }
    ?>
    <form action="action.php" method="post">
        <label>Votre nom :</label>
        <input name="nom" id="nom" type="text" />

        <label>Votre âge :</label>
        <input name="age" id="age" type="number" /></p>

        <button type="submit">Valider</button>
    </form>
    
</body>
</html>