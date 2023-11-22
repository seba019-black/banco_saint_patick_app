<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles/estilos.css">
</head>
<body>
    <nav>
        <li><a href="/nosotros">Nosotros</a></li>
        <li><a href="/contacto">Contacto</a></li>
        <button type="submit" onclick="location.href='templates/login.php'">Login</button>
        <h1>VER SALDO</h1>
    </nav>
    <head>
    <label for="saldo">Saldo Actual</label>
        <div>
            <button onclick="location.href='templates/movimiento.php'">Movimientos</button>
            
            
            <button onclick="location.href='templates/transferir.php'">Transferir</button>
        </div>
        <div>
            <button>Cerrar Sección</button>
        </div>
    </head>
    
</body>
</html>