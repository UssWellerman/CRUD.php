<!doctype html>
<html>
    <head>
        <title>Te vamos a funar</title>
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
                            <strong class="Igris">Que andas buscando manito? </strong>
                            <br><br>
                            <div class="form-row">
                                <div class="col-md-5">
                                    <input class="form-control" type="number" name="numid" min="99999" max="9999999999999999999" value="" placeholder="IDENTIFICATE KGA"/>
                                </div>
                                <div class="form-group col-md-3">
                                    <input class="btn btn-primary" type="submit" value="Eliminar">
                                    <br>
                                </div>
                            </div>
                        </div>
                    </form>
                    <br>
                </div>
                <div id="divconsulta2">
                <?php
                if($_SERVER['REQUEST_METHOD']==='POST')
                    ;
                    {
                        include('funciones.php');
                        $vnumid=$_POST['numid'];
                        $miconexcion=conectar_bd('1234','Crud.sql');
                        $resultado=consulta($miconexcion,"select * from aprendices where Apre_Numid='{$vnumid}'");
                        $resultado2=consulta($miconexcion,"select * from aprendices where Apre_Numid='{$vnumid}'");
                        if($resultado->num>0)
                        {
                            $fila = $resultado->fetch_object();
                            echo $fila->Apre_id." ".$fila->Apre_Tipoid." "$fila->Apre_Numid." ".$.fila->Apre_Nombres." ".$fila->Apre_Apellidos." ".$fila->Apre_Direccion." ".$fila->Apre_Telefono." ".$fila->Apre_Ficha."<br>";
                            if($resultado2)
                            echo "<br> Mani, ya te echaron";
                        }
                        else{
                            echo "No existen datos ";
                        }
                        $miconexcion->close();
                    }?>
                </div>
            </div>
        </div>           
    </body>
</html>