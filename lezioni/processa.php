<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se l'array è stato passato
    if (isset($_POST['valori']) && is_array($_POST['valori'])) {
        $array_valori = $_POST['valori'];
        
        // Mostra l'array ricevuto
        echo "<h1>Array ricevuto:</h1>";
        echo "<pre>";
        print_r($array_valori);
        echo "</pre>";
    } else {
        echo "Nessun array è stato inviato.";
    }
}
?>