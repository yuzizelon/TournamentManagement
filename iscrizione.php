<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iscrizione al Torneo</title>
    
    <!-- Link al CSS di Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style_iscri.css" />
</head>
<body>
    <!-- Barra di navigazione -->
    <?php include "navbar.php"; ?>

    <!-- Header -->
    <header>
        <div class="container">
            <h1>Iscrizione al Torneo</h1>
            <p class="lead">Completa il modulo per partecipare al torneo e unisciti alla sfida!</p>
        </div>
    </header>

    <!-- Form di Iscrizione -->
    <main class="main-content">
        <h2>Dettagli della Squadra</h2>
        <form id="formIscrizioneDettagli" class="mt-4" action="process_iscrizione.php" method="POST">
            <!-- Dati del Caposquadra -->
            <h3 class="mb-3">Caposquadra</h3>
            <input type="text" name="nomeCaposquadra" class="form-control" placeholder="Nome Caposquadra" required>
            <input type="text" name="cognomeCaposquadra" class="form-control" placeholder="Cognome Caposquadra" required>
            <input type="text" name="idCaposquadra" class="form-control" placeholder="ID Caposquadra" required>
            <input type="text" name="classeCaposquadra" class="form-control" placeholder="Classe Caposquadra" required>
            <input type="email" name="emailCaposquadra" class="form-control" placeholder="Email Caposquadra" required>
            <input type="text" name="nomeSquadra" class="form-control" placeholder="Nome Squadra" required>

            <!-- Dati dei Partecipanti -->
            <h3 class="mb-3 mt-5">Partecipanti</h3>
            <div class="partecipanti-row">
                <div class="partecipante">
                    <h4>Partecipante 2</h4>
                    <input type="text" name="nomePartecipante2" class="form-control" placeholder="Nome Partecipante 2" required>
                    <input type="text" name="cognomePartecipante2" class="form-control" placeholder="Cognome Partecipante 2" required>
                    <input type="text" name="idPartecipante2" class="form-control" placeholder="ID Partecipante 2" required>
                    <input type="text" name="classePartecipante2" class="form-control" placeholder="Classe Partecipante 2" required>
                    <input type="email" name="emailPartecipante2" class="form-control" placeholder="Email Partecipante 2" required>
                </div>
                <div class="partecipante">
                    <h4>Partecipante 3</h4>
                    <input type="text" name="nomePartecipante3" class="form-control" placeholder="Nome Partecipante 3" required>
                    <input type="text" name="cognomePartecipante3" class="form-control" placeholder="Cognome Partecipante 3" required>
                    <input type="text" name="idPartecipante3" class="form-control" placeholder="ID Partecipante 3" required>
                    <input type="text" name="classePartecipante3" class="form-control" placeholder="Classe Partecipante 3" required>
                    <input type="email" name="emailPartecipante3" class="form-control" placeholder="Email Partecipante 3" required>
                </div>
            </div>
            <button type="submit" class="btn btn-custom mt-4">Invia Iscrizione</button>
        </form>
    </main>

    <!-- Script di Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
