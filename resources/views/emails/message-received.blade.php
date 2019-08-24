<!DOCTYPE html>
<html lang="es">
<head>
    <title>Mensaje Recibido</title>
</head>
<body>
    <p>Recibiste un mensaje de: {{ $msg['name']}} - {{ $msg['email']}}</p>

    <p><strong>Tel: </strong> {{ $msg['mobile']}}</p>
    <p><strong>Mensaje: </strong> {{ $msg['content']}}</p>
    
</body>
</html>

