<?php
$paragrafo = isset($_GET['paragrafo']) ? htmlspecialchars($_GET['paragrafo']) : '';
$censura = isset($_GET['censura']) ? htmlspecialchars($_GET['censura']) : '';
$lunghezza_paragrafo = strlen($paragrafo);
$testo_censurato = str_replace($censura, '***', $paragrafo);
$lunghezza_censurato = strlen($testo_censurato);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati della Censura</title>
</head>
<body>
    <h1>Risultati della Censura</h1>

    <h2>Paragrafo originale</h2>
    <p><?php echo nl2br($paragrafo); ?></p>
    <p> lunghezza: <?php echo $lunghezza_paragrafo; ?> caratteri</p>

    <h2>Paragrafo censurato</h2>
    <p><?php echo nl2br($testo_censurato); ?></p>
    <p>lunghezza: <?php echo $lunghezza_censurato; ?> caratteri</p>
</body>
</html>