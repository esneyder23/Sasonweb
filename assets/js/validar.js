function validar(){
    var nombre, apellido, placa
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    placa = document.getElementById("placa").value;
    foto = document.getElementById("foto").value;

    if (nombre === "" || apellido ==="" || placa === "") {
        alert(" Todos los campos son obligatorios...")
        return false;
    }
    else if (foto === "") {
        alert("Seleccione una foto para el domiciliario")
        return false;
    }
    else if(nombre.legth>45) //no permite caracteres mayores a 45
    {
     alert("El nombre es muy largo");
     return false; //no permite enviar el formulario si tiene caracteres mayores 
    }
    else if (apellido.legth>45) {
     alert("El apellido es muy largo");
     return false; //no permite enviar el formulario si tiene caracteres mayores 
    }
    else if (identificacion.legth>15) {
        alert("La identificación es muy larga");
        return false; //no permite enviar el formulario si tiene caracteres mayores 
    }
    else if (telefono.legth>10) {
        alert("El teléfono es muy largo");
        return false; //no permite enviar el formulario si tiene caracteres mayores 
    }
    else if (placa.legth>7) {
        alert("La placa es muy larga");
        return false; //no permite enviar el formulario si tiene caracteres mayores 
    }
    

   
}