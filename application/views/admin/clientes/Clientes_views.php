<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>CRUD con CodeIgniter</title>
    </head>
    <body>
        <h2>Crud con CodeIgniter</h2>
        <?php
        //Si existen las sesiones flasdata que se muestren
            if($this->session->flashdata('correcto'))
                echo $this->session->flashdata('correcto');
             
            if($this->session->flashdata('incorrecto')) 
                echo $this->session->flashdata('incorrecto');
        ?>
<table border="1">
    <tr>
        <form action="<?=base_url("/Clientes/add");?>" method="post">
            <td></td>
            <td>
               <input type="nombreZona" name="nombreZona"/>
            </td>            
            <td>
                <input type="submit" name="submit" value="Añadir" />
            </td>
        </form>
    </tr>
<?php
foreach($ver as $fila){
?>
    <tr>
        <td>
            <?=$fila->idZona;?>
        </td>
        <td>
            <?=$fila->nombreZona;?>
        </td>        
        <td>
            <a href="<?=base_url("Clientes/mod/$fila->idZona")?>">Modificar</a>
            <a href="<?=base_url("Clientes/eliminar/$fila->idZona")?>">Eliminar</a>
        </td>
    </tr>
<?php
    
}
?>
</table>
    </body>
</html>