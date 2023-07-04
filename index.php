

<!-- Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale -->




<?php 

    $length = $_GET ['passwordLenght'];
    
function random_string($length) {
    $str = random_bytes($length);
    $str = base64_encode($str);
    return $str;
}

$password = random_string($length);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StrongPasswordGenerator</title>
</head>
<body>
    <h1>
        Random Password Generator
    </h1>
    <form action="./index.php" method="GET">
        <label for="passwordLenght">how long do you want the password?</label><br>
        <input type="number" name="passwordLenght"><br>
        <input type="submit" value="Submit">
    </form> 

<p>
    <?php 

    echo "la tua password è: " . $password;
    ?>
</p>

</body>
</html>