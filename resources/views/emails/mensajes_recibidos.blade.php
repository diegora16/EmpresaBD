<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje Recibido con Éxito</title>
</head>
<body>
    <h1>Recibiste un mensaje del sistema automatizado</h1>
    <p><span class="font-bold">Nombre:</span> {{$msg['nombre']}}</p>
    <p><span class="font-bold">Email:</span> {{$msg['email']}}</p>
    <p><span class="font-bold">Asunto:</span> {{$msg['asunto']}}</p>
    <p><span class="font-bold">Mensaje:</span> {{$msg['mensaje']}}</p>
</body>
</html>