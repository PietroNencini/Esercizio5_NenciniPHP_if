<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 5 PHP</title>
</head>
<body>
    <?php
        $number = rand(1,10);
        $msg = $number%2 == 0 ? "Il numero è PARI" : "Il numero è DISPARI";
        echo " <p> $msg </p>";
    ?>
</body>
</html>