<!doctype html>
<html>
    <head>
        <head>
            <title>login </title>
            <meta http-equiv="Content-type" content="text/html; charset=utf-8">
            <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
            <link href="css/bootstrap.min.css" rel="stylesheet"/>
            <link href="Estilos.css" rel="stylesheet"/>
            <script src="js/boostrap.js"></script>
        </head>
        <body>
            <div id="div1" class="container">
                <br>
                <div id="div2">
                    <img src="IMAGES/logo.png" alt="stylesheet"/>
                    <div id="div3">
                        <form id="formulario" method="post" action="menu.php">
                            <br>
                            <strong class="Igris"> Ingrese su usuario y contrasenia para iniciar sesion</strong>
                            <br>
                            <label class="Igris">Nombre de Usuario:</label>
                            <br>
                            <input style="text-transform: uppercase;" type="text" name="usuario" value="" required/>
                            <br>
                            <label class="Igris">Contrasenia manito:</label>
                            <br>
                            <input type="password" name="clave" value="" required/>
                            <br><br>
                            <input class="btn btn-primary" type="submit" value="Iniciar sesion"/>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
       <br><br>
    </body>
</html>