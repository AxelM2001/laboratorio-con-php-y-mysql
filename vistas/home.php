<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div id="menu">
        <ul>
            <li>Inicio</li>
            <li class="cerrar-sesion"><a href="includes/logout.php">Cerrar sesión</a></li>
        </ul>
    </div>

    <section>
        <h1>Bienvenido <?php echo $user->getNombre();  ?></h1>
    </section>

    <form action="vistas/recibir.php" method="POST">

    
        <h2>Crear consulta</h2>
        
        Nombre:    <input type="text" name="nombre"><br/><br/>

        Teléfono: <input type="text" name="telefono"> <br/><br/>

        Correo: <input type="text" name="email"> <br/><br/>

        Usuario: <input type="text" name="username"> <br/><br/>

        Condición (si posee especifique): <input type="text" name="condicion"> <br><br/>

        Género: <input type="radio" name="genero" value="M">Masculino
                <input type="radio" name="genero" value="F">Femenino <br/><br/>

        <input type="submit" name="enviar" value="Enviar">

        
    </form>

    
    
</body>
</html>