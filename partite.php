<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partite del Torneo</title>

    <!-- Link al CSS di Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Stile personalizzato -->
    <style>
        /* Impostazioni generali per il corpo della pagina */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #4a148c, #ff8f00);
            color: #fff;
            margin-top: 70px; /* Spazio per la navbar fissa */
        }

        /* Header */
        header {
            background: linear-gradient(to right, #4a148c, #ff8f00);
            text-align: center;
            padding: 50px 0;
        }

        header h1 {
            font-size: 3rem;
            color: #ffeb3b;
            text-shadow: 2px 2px 12px rgba(0, 0, 0, 0.6);
        }

        header p {
            font-size: 1.2rem;
        }

        .navbar {
            background: rgba(10, 10, 10, 0.9);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            display: flex;
            justify-content: center;
            padding: 0 20px;
        }

        .navbar-nav .nav-item:hover .nav-link {
            color: #ffeb3b !important;
        }

        /* Contenuto principale */
        main {
            background: rgba(0, 0, 0, 0.75);
            padding: 50px 20px;
            border-radius: 12px;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.6);
            margin-top: 20px;
            text-align: center;
        }

        h2 {
            font-size: 2rem;
            color: #ffeb3b;
        }

        p {
            font-size: 1.2rem;
            color: #f0f0f0;
        }

        /* Bottone personalizzato */
        .btn-warning {
            background-color: #ffeb3b;
            color: #000;
            border-radius: 30px;
            font-weight: bold;
            transition: background-color 0.3s;
            box-shadow: 0px 4px 10px rgba(255, 235, 59, 0.5);
        }

        .btn-warning:hover {
            background-color: #ffb300;
            color: #fff;
            box-shadow: 0px 4px 20px rgba(255, 193, 7, 0.8);
            transform: scale(1.1);
        }
    </style>
</head>
<body>

<!-- Barra di navigazione -->
<?php include "navbar.php"; ?>

    <!-- Sezione principale -->
    <header>
        <div class="container">
            <h1 class="display-4 fw-bold">Le Partite del Torneo</h1>
            <p class="lead">Scopri tutte le partite in programma e preparati per una sfida emozionante!</p>
        </div>
    </header>

    <!-- Contenuto principale -->
    <main class="container my-5">
        <div class="text-center">
            <h2 class="mb-4">Le prossime partite</h2>
            <p>Controlla il calendario delle partite e preparati a sfidare i migliori giocatori!</p>
            <!-- Puoi aggiungere un elenco o una tabella delle partite qui -->
            <div class="mt-4">
                <a href="iscrizione.html" class="btn btn-warning btn-lg text-dark">Iscriviti al Torneo</a>
            </div>
        </div>
    </main>
    <!-- Script di Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
