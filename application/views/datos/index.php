<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>inicio</title>

</head>

<body>
    <h4><?php echo $titulo;?></h4>
    <form id="datos" name="datos" method="post" action="<?php echo base_url(); ?>index.php/datos_controller/registrar">
        <div>
            <label for="">Nombre:</label>
            <input type="text" name="nombre"></input>
        </div>
        <div>
            <label for="">Telefono:</label>
            <input type="text" name="telefono"></input>
        </div>
        <div>
            <label for="">Correo:</label>
            <input type="text" name="correo"></input>
        </div>

        <button type="submit" value="registrar">
            Guardar
        </button>
    </form>

</body>

</html>