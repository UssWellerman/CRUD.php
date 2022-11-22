<!Doctype html> 
<html>
    <head>
        <title>Modificacion de aprendiz</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="micss/estilos.css" rel="stylesheet"/>
        <script src="js/boostrap.js"></script>
    </head>
    <body>
        <div id="divconsulta" class="container">
            <br>
            <div id="div2">
                <div id="div4">
                    <form name="formulario" role="form" method="post">
                        <div class="col md-12">
                            <strong class="Igris">Ingrese criterio de busqueda</strong>
                            <br><br>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <input class="form-control" type="number" name="numid" min="9999" max="99999999999999" autofocus value="" placeholder="IDENTIFICACION"/>
                                </div>
                                <div class="form-group col-md-3">
                                    <input class="btn btn-primary" type="submit" value="Consultar">
                                </div>
                            </div>
                            <br>
                        </div>
                    </form>
                    <br>
                </div>
                <div id="divconsulta2">
                        <?php
                        if ($_SERVER['REQUEST_METHOD']==='POST')
                        {
                            include('funciones.php');
                            session_start();
                            $vnumid=$_POST['numid'];
                            $miconexion=conectar_bd('1234', 'sena_bd');
                            $resultado=consulta($miconexion, "select *from aprendices where Apre_Numid='{$vnumid}'");
                            if($resultado->num_rows>0)
                            {
                                $fila = $resultado->fetch_object();
                                $_SESSION['ide1']=$fila->Apre_id;
                                ?>
                                <form id="formulario2" role="form" method="post" action="actualizar_aprendiz.php">
                                    <div class="col-md-12">
                                        <strong class="Igris">Datos del aprendiz</strong><br>
                                        <label class="Igris">ID:</label>
                                        <input class="form-control"type="text" name="ide" disabled="disabled" value="<?php echo $fila->Apre_id ?>"/>
                                        <label for="Igris">Nombres</label>
                                        <input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" required value="<?php echo $fila->Apre_Nombres ?>"required/>
                                        <label for="Igris">Apellidos</label>
                                        <input class="form-control" style="text-transform: uppercase;" type="text" name="apellidos" required value="<?php echo $fila->Apre_Apellidos ?>" required/>
                                        <label for="Igris">Direccion</label>
                                        <input class="form-control" style="text-transform: uppercase;" type="text" name="direccion" required value="<?php echo $fila->Apre_Direccion ?>"required/>
                                        <label for="Igris">Telefono</label>
                                        <input class="form-control" type="number" name="telefono" min="99999" max="9999999999999999" value="<?php echo $fila->Apre_Telefono ?>" required/>
                                        <br>
                                    </div>
                                </form>
                                <?php
                            }
                            else{
                                echo "No existen registros";
                            }
                            $miconexion->close();
                        }?>
                    
                </div>
            </div>
        </div>
    </body>
</html>