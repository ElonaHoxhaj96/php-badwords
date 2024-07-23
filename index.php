<?php
$paragrafo = isset($_GET['paragrafo']) ? htmlspecialchars($_GET['paragrafo']) : '';
$censura = isset($_GET['censura']) ? htmlspecialchars($_GET['censura']) : '';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form di Censura</title>
</head>
<body>
    <h1>Inserisci Paragrafo e Parola da Censurare</h1>
    <form action="index.php" method="GET">  
        <label for="paragrafo">Paragrafo:</label><br>
        <textarea id="paragrafo" name="paragrafo" rows="10" cols="100" required>  <?php echo $paragrafo ?> </textarea><br><br>
        
        <label for="censura">Parola da censurare:</label><br>
        <input type="text" id="censura" name="censura" required>  <?php echo $censura ?><br><br>
        
        <input type="submit" value="Invia">
    </form>
    
</body>
</html>
