
<body>
    <h1>Inserimento dati Film e Proiezioni</h1>

    <?php
// Connessione al database (modifica con i tuoi dati)
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "film_db"; // Sostituisci con il nome del tuo database

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la connessione
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Variabili per gestire l'inserimento
$codice_film = $titolo = $anno_produzione = $regista = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /*
    La variabile globale $_SERVER è un array associativo che contiene informazioni sull'ambiente del server e delle richieste.
    La chiave "REQUEST_METHOD" indica il metodo HTTP utilizzato per effettuare la richiesta al server.
    Questo controllo verifica se la richiesta è stata effettuata con il metodo POST. Il metodo POST è comunemente usato per inviare dati in modo sicuro (ad esempio tramite un modulo HTML).
    Scopo: Assicurarsi che il codice venga eseguito solo quando viene effettuata una richiesta POST. Questo è utile per evitare che il codice venga eseguito accidentalmente se si accede alla pagina senza inviare dati.
    */

    // Recupera i dati inviati tramite POST
    //Le righe successive estraggono i dati dal corpo della richiesta POST
    $codice_film = $_POST['Codice_Film'];
    $titolo = $_POST['Titolo'];
    $anno_produzione = $_POST['Anno_Produzione'];
    $regista = $_POST['Regista'];

    // Query SQL per inserire i dati nella tabella
    $sql = "INSERT INTO Film (Codice_Film, Titolo, Anno_Produzione, Regista)
            VALUES ('$codice_film', '$titolo', '$anno_produzione', '$regista')";
    /*
    Considerazioni aggiuntive
    Sicurezza:
    Convalida dei dati: È importante verificare che i dati ricevuti siano validi e abbiano il formato atteso. Ad esempio:

    Assicurarsi che $anno_produzione sia un numero e rientri in un intervallo accettabile (ad esempio 1900-2025).
    Sanitizzare i dati per prevenire attacchi di tipo XSS o SQL Injection, soprattutto se i dati vengono salvati in un database.
    $titolo = htmlspecialchars($_POST['Titolo'], ENT_QUOTES, 'UTF-8');


    Gestione degli errori: Bisogna verificare che i campi obbligatori non siano vuoti. Ad esempio:
    if (empty($codice_film) || empty($titolo) || empty($anno_produzione) || empty($regista)) {
    die("Tutti i campi sono obbligatori!");
    }   
    */

    // Esegui la query
    if ($conn->query($sql) === TRUE) {
        echo "Nuovo film inserito con successo!";
    } else {
        echo "Errore: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci Film</title>
</head>
<body>
    <h2>Inserisci un nuovo Film</h2>
    <!-- Modulo per inserire i dati
     Quando l'utente compila il modulo e lo invia:

Il browser invia una richiesta POST al server.
I valori inseriti nei campi del modulo (ad esempio il titolo di un film)
 vengono inviati e possono essere recuperati tramite $_POST.
 -->

    <form method="POST" action="">
        <label for="Codice_Film">Codice Film:</label>
        <input type="text" id="Codice_Film" name="Codice_Film" required><br><br>

        <label for="Titolo">Titolo:</label>
        <input type="text" id="Titolo" name="Titolo" required><br><br>

        <label for="Anno_Produzione">Anno di Produzione:</label>
        <input type="number" id="Anno_Produzione" name="Anno_Produzione" required><br><br>

        <label for="Regista">Regista:</label>
        <input type="text" id="Regista" name="Regista" required><br><br>

        <input type="submit" value="Inserisci Film">
    </form>


    <p>Clicca sul link qui sotto per andare alla home page.</p>
<a href="index.php">Home</a>

</body>

<!-- Flusso complessivo
La pagina riceve una richiesta POST.
Il server verifica che il metodo sia POST.
I dati vengono recuperati dai campi del modulo tramite $_POST.
I dati possono essere elaborati ulteriormente (ad esempio salvati in un database, visualizzati, ecc.).
-->

</html>