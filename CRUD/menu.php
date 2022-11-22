<?php
    include('funciones.php');
    session_start();
    $_SESSION['nusuario']=$_POST['usuario'];
    $_SESSION['nclave']=$_POST['clave'];

    $miconexion=conectar_bd('1234','Crud');
    $resultado=consulta($miconexion,"select * from usuarios where usua_nomuser='{$_SESSION['nusuario']}' and usua_contra='{$_SESSION['nclave']}'");
?>
<!doctype html>
    <html>
        <head>
            <title>Menu </title>
            <meta http-equiv="content-type" content="text/html; charset=utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="css/bootstrap.min.css"/>
            <link rel="stylesheet" href="Estilos.css"/>
            <script src="js/bootstrap.js"></script>
        </head>
        <body>
            <div id="div1" class="container">
                <br>
                <div id="div2">
                    <?php if($resultado->num_rows>0) { ?> <img src="IMAGES/logo.pg"> <?php} ?>
                    <div id="div3">
                    <?php
                        if($resultado->num_rows>0)
                        {
                            $fila = $resultado->fetch_object();
                            $_SESSION['tipo_usuario']=$fila->usua_tipo;
                            ?>
                            <label class="Igris">Bienvenido <?php echo 
                            $_SESSION['nusuario'] ?> </label><br>

                            <input style="width:40%;" class="btn-btn-primary" type="button" onclick="location.href='Registro_aprendiz.php'" value="Registro de aprendices">
                            <input style="width:40%;" class="btn-btn-primary" type="button" onclikc="location.href='consulta_aprendiz.php'" value="Consulta de aprendices">
                            <br><br>
                            <input style="width:40%;" class="btn-btn-primary" type="button" onclikc="location.href='modificar_aprendiz.php'" value="Modificar aprendiz">
                            <input style="width:40%;" class="btn-btn-primary" type="button" onclikc="location.href='borrar_aprendiz.php'" value="borrar aprendices">
                            <br><br>
                            <input style="width:40%;" class="btn-btn-primary" type="button" onclikc="location.href='index.php'" value=" Crear programa">
                            <input style="width:40%;" class="btn-btn-primary" type="button" onclikc="location.href='index.php'" value=" Consultar programa">
                            <br><br>
                            <input style="width:40%;" class="btn-btn-primary" type="button" onclikc="location.href='index.php'" value=" Modificar programa">
                            <input style="width:40%;" class="btn-btn-primary" type="button" onclikc="location.href='index.php'" value=" ELiminar programa">
                            <br><br>
                            <input style="width:40%;" class="btn-btn-primary" type="button" onclikc="location.href='index.php'" value=" Crear ficha">
                            <input style="width:40%;" class="btn-btn-primary" type="button" onclikc="location.href='index.php'" value=" Consultar ficha">
                            <input style="width:40%;" class="btn-btn-primary" type="button" onclikc="location.href='index.php'" value=" Modificar ficha">
                            <input style="width:40%;" class="btn-btn-primary" type="button" onclikc="location.href='index.php'" value=" ELiminar ficha">
                            <?php
                        }
                            else
                            {
                                echo "Usuario o clave invalida";
                            }
                            $miconexion->close();
                            ?>
                        <br><br>
                    </div>
                    </div>
                </div>
            </div>
        </body>
    </html>
    