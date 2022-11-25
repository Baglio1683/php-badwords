<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php-badwords</title>
</head>

<body>

    <form action="request.php" method="GET">
        <label for="paragraph">Frase Da Inviare</label>
        <input type="textarea" id="paragraph" name="paragraph"></input>
        <hr>
        <label for="word">Parola da Censurare</label>
        <input type="text" id="word" name="word">
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

</body>

</html>