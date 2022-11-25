<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>

    <?php
    $phrase = $_GET["paragraph"];
    $badWord = $_GET["word"];
    ?>

    <h1>Il paragrafo originale è: </h1>
    <?php echo $phrase; ?>

    <h2>La lunghezza del paragrafo è: </h2>
    <?php echo strlen($phrase); ?>

    <h2>La frase censurata è: </h2>
    <?php echo $badWord; ?>
    <h2>La lunghezza della frase censurata è </h2>



    <a href="index.php">Ritorna alla home</a>

</body>

</html>