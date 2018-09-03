</html><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Sazón Web-Login ::</title>

<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url();?>https://fonts.googleapis.com/icon?family=Material+Icons">

<!-- Theme style -->

<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Custom Css -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">

<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/themes/all-themes.css">

</head>
<body class="theme-cyan login-page authentication">

<div class="container">
<div class="card-top"></div>
<div class="card">
<h1 class="title"><span>Sazón Web</span>modificar<span class="msg"></span></h1>
<div class="col-md-12">
<form action="" method="POST">
            <?php foreach ($mod as $fila){ ?>            
            <input type="text"  name="nombreProducto" onkeypress="return soloLetras(event)" title="solo se permite ingresar letras" required value="<?=$fila->nombreProducto?>"/>            
            <input type="submit" name="submit" value="Modificar"/>
            <?php } ?>
        </form>
<a href="<?=base_url("tipoproducto")?>">Volver</a>
</div>
</div>
</div>
<div class="theme-bg"></div>

<!-- Validaciones -->
<script>
function check(e) {
    tecla = (document.all) ? e.keyCode : e.which;


    if (tecla == 8) {
        return true;
    }
    patron = /[# - - áéíóúabcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ 1234567890]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>



  <script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
  </script>




        <script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }
       
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>
 <script>
    function numeros(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " 1234567890";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
               
                break;
                 
            } 
           
        }
        
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
            
                 }

    }
   
</script>



<script language="javascript">

function aaa(campo, event) {

CadenaaReemplazar = " ";
CadenaReemplazo = "";
CadenaTexto = campo.value;
CadenaTextoNueva = CadenaTexto.split(CadenaaReemplazar).join(CadenaReemplazo);
campo.value = CadenaTextoNueva;

}

</script>

<!-- Validaciones -->

<!-- Jquery Core Js -->
<script src="<?php echo base_url();?>assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?php echo base_url();?>assets/bundles/vendorscripts.bundle.js"></script><!-- Lib Scripts Plugin Js -->
<script src="<?php echo base_url();?>assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
</body>
</html