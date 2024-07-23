
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form di Censura</title>
</head>
<body>
    <h1>Inserisci Paragrafo e Parola da Censurare</h1>
    <form action="censura.php" method="GET">  
        <label for="paragrafo">Paragrafo:</label><br>
        <textarea id="paragrafo" name="paragrafo" rows="10" cols="100" required></textarea><br><br>
        
        <label for="censura">Parola da censurare:</label><br>
        <input type="text" id="censura" name="censura" required><br><br>
        
        <input type="submit" value="Invia">
    </form>
</body>
</html>