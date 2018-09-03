<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Modificar usuarios</title>
    </head>
    <body>
        <h2>Modificar usuario</h2>
        <form action="" method="POST">
            <?php foreach ($mod as $fila){ ?>            
            <input type="text"  name="nombreZona" value="<?=$fila->nombreZona?>"/>            
            <input type="submit" name="submit" value="Modificar"/>
            <?php } ?>
        </form>
        <a href="<?=base_url("zonas")?>">Volver</a>
    </body>
</html>