<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classifica del Torneo</title>
    
    <!-- Link al CSS di Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style_class.css">
</head>
<body>
    <!-- Barra di navigazione -->
    <?php include "navbar.php"; ?>

    <!-- Header -->
    <header>
        <div class="container">
            <h1>Classifica del Torneo</h1>
            <p class="lead">Consulta la classifica per scoprire chi sta dominando il torneo!</p>
        </div>
    </header>

    <!-- Classifica -->
    <?php
    // Connessione al database
    $conn = new mysqli('sql204.infinityfree.com', 'if0_37692320', 'alignani2024', 'if0_37692320_torneo');

    if ($conn->connect_error) {
        die('Errore di connessione: ' . $conn->connect_error);
    }

    // Query per ottenere squadre confermate
    $sql = "SELECT * FROM Squadra WHERE Confermato = 1";
    $sql = "SELECT  Squadra, Caposquadra, Stato FROM Squadra";

    $result = $conn->query($sql);

    echo '<main class="container mt-5"><h2>Squadre Confermate</h2>';
    if ($result->num_rows > 0) {
        echo '<ul class="list-group">';
        while ($row = $result->fetch_assoc()) {
            echo '<li class="list-group-item">' . $row["Caposquadra"] . ' - ' . $row[" Squadra"] . '</li>';
        }
        echo '</ul>';
    } else {
        echo '<p>Nessuna squadra confermata al momento.</p>';
    }
    echo '</main>';
    echo '<main class="container mt-5"><h2>Classifica</h2>';
if ($result->num_rows > 0) {
    echo '<ul class="list-group">';
    while ($row = $result->fetch_assoc()) {
        if ($row["Stato"] == 1) {
            // Squadra confermata
            echo '<li class="list-group-item">Squadra: ' . $row["Caposquadra"] . '</li>';
        } else {
            // Squadra non confermata
            echo '<li class="list-group-item">Squadra: ' . $row["Caposquadra"] . ' (Da confermare)</li>';
        }
    }
    echo '</ul>';
} else {
    echo '<p>Non ci sono squadre registrate al momento.</p>';
}
echo '</main>';


    // Chiudi la connessione
    $conn->close();
    ?>

    <!-- Script di Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
