<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background: url('/images/background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }

        .welcome-container {
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
        }

        h1 {
            font-size: 3em;
            margin: 0;
        }

        p {
            font-size: 1.5em;
            margin-top: 10px;
        }

        .buttons {
            margin-top: 20px;
        }

        .buttons a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            font-size: 1.2em;
            color: #fff;
            text-decoration: none;
            background-color: #007BFF;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .buttons a:hover {
            background-color: #0056b3;
        }

        footer {
            text-align: center;
            padding: 10px;
            background: rgba(0, 0, 0, 0.8);
            color: #ccc;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Bienvenido al Sistema de Pedidos Especiales</h1>
        <p>Gestione sus pedidos de manera rápida y eficiente.</p>
        <div class="buttons">
            <a href="/login">Iniciar sesión</a>
            <a href="https://www.youtube.com/watch?v=tu-video-tutorial" target="_blank">Ver tutorial</a>
        </div>
    </div>
    <footer>
        Desarrollado por Horizondevs.net | Contacto: <a href="mailto:info@horizondevs.net" style="color: #fff;">info@horizondevs.net</a>
    </footer>
</body>
</html>