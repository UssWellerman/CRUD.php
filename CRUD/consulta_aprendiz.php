<!doctype  html>
<html>
    <head>
        <title>Consulta de aprendiz</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="Estilos.css" rel="stylesheet"/>
        <script src="js/boostrap.js"></script>
    </head>
    <body>
        <div id="divconsulta" class="container">
            <br>
            <div id="div2">
                <div id="div4">
                    <form name="formulario" role="form" method="post">
                        <div class="col-md-12">
                            <strong class="Igris">Que se te antoja buscar?</strong>
                            <br><br>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input class="form-control" type="number" name="numid" min="9999" max="99999999999" value="" placeholder="IDENTIFICACION"/>
                                </div>
                                <div class="form-group col-md-3">
                                    <input class="form-control" style="text-transform: uppercase;" type="text" name="Nombres" value="" placeholder="Nombres"/>
                                </div>
                                <div class="form-group col-md-3">
                                    <input class="form-control" style="text-transform: uppercase;" type="text" name="Apellidos" value="" placeholder="Apellidos"/>
                                </div>
                                <div class="form-group col-md-3">
                                    <input class="btn btn-primary" type="submit" value="consultar">
                                </div>
                            </div>
                        </div>
                        <br>
                    </form>
                    <br>
                </div>
                <div id="divconsulta2">
                    <?php
                    if($_SERVER['REQUEST_METHOD']==='POST')
                    {
                        include('funciones.php');
                        $vnumid=$_POST['numid'];
                        $nombres=$_POST['nombres'];
                        $vapellidos=$_POST['apellidos'];
                        $miconexion=conectar_bd('1234',Crud);
                        $resultado=consulta($miconexion,"select *from aprendices where trim(Apre_Numid) like '%{$vnumid}%' and (trim(Apre_Nombres) like '%{$vnombres}%' and trim(Apre_apellidos)like '%{$vapellidos}%'");
                        if($resultado->num_rows>0)
                        {
                            while ($fila = $resultado->fetch_object())
                            {
                                echo $fila ->Apre_id." ".$fila->Apre_Tipoid." ".$fila->Apre_Numid." ".$fila->Apre_Nombres." ".$fila->Apre_Apellidos." ".$fila->Apre_Direccion." ".$fila->Apre_Telefono." ".$fila->Apre_Ficha."<br>";
                            }
                        }
                        else{
                            echo "No existen registron....F :/"
                        }
                        $miconexion->close();
                    }?>
                </div>
            </div>
        </div>
    </body>
</html>