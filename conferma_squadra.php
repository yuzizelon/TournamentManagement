<?php
// Connessione al database
$conn = new mysqli('sql204.infinityfree.com', 'if0_37692320', 'alignani2024', 'if0_37692320_torneo');

// Verifica connessione
if ($conn->connect_error) {
    die('Errore di connessione: ' . $conn->connect_error);
}

// Recupera l'ID della squadra da confermare
$idSquadra = $_GET['id']; // Passa l'ID come parametro nell'URL

// Aggiorna lo stato della squadra
$sql = "UPDATE Squadra SET Stato = 1 WHERE ID = '$idSquadra'";
if ($conn->query($sql) === TRUE) {
    echo "Squadra confermata con successo!";
} else {
    echo "Errore nella conferma della squadra: " . $conn->error;
}

// Chiudi la connessione
$conn->close();
?>
