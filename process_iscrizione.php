<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Credenziali per il database
$host = "sql204.infinityfree.com"; // O prova "localhost" se il database è sullo stesso server
$username = "if0_37692320";
$password = "alignani2024";
$database = "if0_37692320_torneo";

// Connessione al database
$conn = new mysqli($host, $username, $password, $database);

// Controllo della connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Recupero dati dal modulo
$nomeCapo = $_POST['nomeCaposquadra'];
$cognomeCapo = $_POST['cognomeCaposquadra'];
$idCapo = $_POST['idCaposquadra'];
$classeCapo = $_POST['classeCaposquadra'];
$emailCapo = $_POST['emailCaposquadra'];
$nomeSquadra = $_POST['nomeSquadra'];

$nomePartec2 = $_POST['nomePartecipante2'];
$cognomePartec2 = $_POST['cognomePartecipante2'];
$idPartec2 = $_POST['idPartecipante2'];
$classePartec2 = $_POST['classePartecipante2'];
$emailPartec2 = $_POST['emailPartecipante2'];

$nomePartec3 = $_POST['nomePartecipante3'];
$cognomePartec3 = $_POST['cognomePartecipante3'];
$idPartec3 = $_POST['idPartecipante3'];
$classePartec3 = $_POST['classePartecipante3'];
$emailPartec3 = $_POST['emailPartecipante3'];

// Verifica della connessione
if ($conn->connect_error) {
    die("Errore di connessione: " . $conn->connect_error);
}

// Procedura per inserire i dati nel database
$sqlSquadra = "INSERT INTO Squadra (Caposquadra, Giocat_2, Giocat_3, Confermato) VALUES ('$idCapo', '$idPartec2', '$idPartec3', 0)";
if ($conn->query($sqlSquadra) === TRUE) {
    $sqlPersona1 = "INSERT INTO Persona (Nome, Cognome, Classe, e_mail, Stato, Squadra) VALUES ('$nomeCapo', '$cognomeCapo', '$classeCapo', '$emailCapo', 'Caposquadra', '$idCapo')";
    $sqlPersona2 = "INSERT INTO Persona (Nome, Cognome, Classe, e_mail, Stato, Squadra) VALUES ('$nomePartec2', '$cognomePartec2', '$classePartec2', '$emailPartec2', 'Giocatore', '$idCapo')";
    $sqlPersona3 = "INSERT INTO Persona (Nome, Cognome, Classe, e_mail, Stato, Squadra) VALUES ('$nomePartec3', '$cognomePartec3', '$classePartec3', '$emailPartec3', 'Giocatore', '$idCapo')";

    if ($conn->query($sqlPersona1) === TRUE && $conn->query($sqlPersona2) === TRUE && $conn->query($sqlPersona3) === TRUE) {
        echo "Iscrizione completata con successo!";
    } else {
        echo "Errore durante l'inserimento dei partecipanti: " . $conn->error;
    }
} else {
    echo "Errore durante l'inserimento della squadra: " . $conn->error;
}

// Chiudi la connessione
$conn->close();

?>
