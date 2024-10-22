<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">about</a>
        <a href="/contact">contact</a>
    </nav>

    {{ $slot }} <!-- Versão Curta -->
    <!--<?php echo $slot ?> Versão longa -->
</body>

</html>