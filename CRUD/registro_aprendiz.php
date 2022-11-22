<!doctype html> 
<html>
    <head>
        <title> registro </title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
            <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
            <link href="css/bootstrap.min.css" rel="stylesheet"/>
            <link href="micss/estilos.css" rel="stylesheet"/>
            <script src="js/boostrap.js"></script>
    </head>
    <body>
        <div id="div1" class="container">
            <br>
            <div id="div2">
                <?php session_start();(!empy($_SESSION['Tipo_usuario'])) { ?> <img scr="IMAGENES/banner3.png"> <?php} ?>
                <div id="div3">
                       <?php
                    if($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
                    {
                        ?>
                        <form id="formulario" role="form"method="post"action="Guardado_aprendiz.php">
                            <div class="col-md-12">
                                <strong class="Igris">Ingrese los datos del senpai</strong>
                                <br>
                                <label class="Identificacion:"></label>
                                <div class="form-row">
                                    <div class="form-group col-xs-2">
                                        <select class="form-group" name="Tipoid">
                                            <option value="CC">CC</option>
                                            <option value="TI">TI</option>
                                            <option value="RC">RC</option>
                                            <option value="PEP">PEP</option>
                                        </select>
                                    </div>
                                    <div class="form-group col md-6">
                                        <input class="form-control input-lg" type="number" name="numid" min="9999" max="99999999999999999" value="" placeholder="IDENTIFICACION" required/>
                                    </div>
                                </div>
                                <label class="Igris">NOmbres:</label>
                                <input class="form-control" style="text-transform:uppercase;" type="text" name="nombres" value="" placeholder="Nombres" required/>
                                <label class="Igris">Apellidos:</label>
                                <input class="form-control" style="text-transform:uppercase;" type="text" name="Apellidos" value="" placeholder="Apellidos" required/>
                                <label class="Igris">Direccion:</label>
                                <input class="form-control" style="text-transform:uppercase;" type="text" name="Direccion" value="" placeholder="Direccion" required/>
                                <label class="Igris">Telefono:</label>
                                <input class="form-control" type="number" name="Telefono" value="" placeholder="Telefono" required/>
                                <label class="Igris">ficha:</label>
                                <input class="form-control" type="number" name="Ficha" min="9999" max="99999999999" value="" placeholder="Ficha" required/>
                                <br>
                                <input class="btn btn-primary" type="submit" value="Guardar">
                            </div>
                        </form>
                        <?php
                    }
                    else
                    {
                    echo"Mi rey, no tienes permisos para hacer esta cuestion";
                    }
                    ?>
                </div>       
            </div>
        </div>
    </body>
</html>