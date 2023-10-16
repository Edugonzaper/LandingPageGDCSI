<?php

require_once('database.php');
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FBPEB1YW74"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-FBPEB1YW74');
    </script>
    <meta charset="UTF-8">
    <title>Nuevos productos de GDragonCard</title>
    <link rel="stylesheet" href="../css/stylemaster.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>¿Cansado de las trampas en el online o de no tener cómo compartir los mazos?</h1>
        </header>
        
        <section>
            <h2>¡No te quedes atrás!</h2>
            <p>Ya no tendrás que preocuparte más por eso, ¡espera nuestro nuevo sistema!</p>
        </section>
        
        <section>
            <h2>¡Apúntate!</h2>
            <form action="/procesar_registro.php" method="post">
                <input type="email" name="correo" placeholder="Ingresa tu correo electrónico" required>
                <button type="submit" id="registroButton">Regístrate</button>
            </form>
        </section>
    </div>

    
</body>
</html>
