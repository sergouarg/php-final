// common.js (cargado en todas las páginas)
var urlActual = window.location.href;
console.log(urlActual);

//---------------------Scripts del archivo index.html ------------------

if (window.location.pathname === "/tp/index.php") {
    console.log("Estamos en index");
    function specificFunctionForIndexPage() {
        // Lógica específica para la página index.html
    }
    
    var btnEnviarOrador = document.getElementById("btnEnviarOrador");
    btnEnviarOrador.addEventListener('click',function(event){
        if(inputOradorNombre.value==""||inputOradorApellido.value==""||inputOradorTema.value==""){
            alert("Por favor ingresa los datos completos");
        }
        else{
            confirmarRegistro();
        }    
    });

    function confirmarRegistro() {
        // Utiliza la función confirm de JavaScript
        var confirmacion = confirm("¿Estás seguro de registrarte como Orador?");
        
        // Si el usuario hace clic en "Aceptar", envía el formulario
        if (confirmacion) {
            document.getElementById("formularioOradores").submit();
        }
    }
}

//---------------------Scripts del archivo ticket.html ------------------
if (window.location.pathname === "/tp/ticket.php") {

    var ticket1 = document.getElementById("ticket1");
    var ticket2 = document.getElementById("ticket2");
    var ticket3 = document.getElementById("ticket3");
    var select = document.getElementById("select_categoria");


    ticket1.addEventListener('click',function(event){
        select.selectedIndex = 0;
        actualizarMensaje();
    });
    ticket2.addEventListener('click',function(event){
        select.selectedIndex = 1;
        actualizarMensaje();
    });
    ticket3.addEventListener('click',function(event){
        select.selectedIndex = 2;
        actualizarMensaje();
    });


    var inputnombre=document.getElementById("input_nombre");
    var inputapellido=document.getElementById("input_apellido");
    var inputemail=document.getElementById("input_email");
    var inputcantidad=document.getElementById("input_cantidad");
    var mensajeTotal = document.getElementById("caja_informacion");

    var btnReset = document.getElementById("BotonBorrarForm");
    btnReset.addEventListener('click',function(event){
        var inputnombre=document.getElementById("input_nombre");
        var inputapellido=document.getElementById("input_apellido");
        var inputemail=document.getElementById("input_email");
        var inputcantidad=document.getElementById("input_cantidad");
        
        inputnombre.value="";
        inputapellido.value="";
        inputemail.value="";
        inputcantidad.value="";
        select.selectedIndex=0;
        mensajeTotal.textContent="Total a pagar: $";
    });
    inputcantidad.addEventListener('change',function(event){
        actualizarMensaje();
    });
    select.addEventListener('change',function(event){
        actualizarMensaje();
    });

    var btnResumen = document.getElementById("BotonResumenForm");
    btnResumen.addEventListener('click',function(event){
        if(inputnombre.value==""||inputapellido.value==""||inputemail.value==""||inputcantidad.value==""){
            alert("Por favor ingresa los datos completos");
        }
        else{
            actualizarMensaje();
        }    
    });
        //***** funcion que actualiza el mensaje con el monto a pagar */
    function actualizarMensaje() {
        var valorTicket=200;
        var descuento=0;
        var costo=0;
        var cantidad=inputcantidad.value;
        var opcion=select.selectedIndex;
        var mensaje = "";
    
        if (opcion == "0") {
            descuento=valorTicket*0.8;      
        } else if (opcion == "1") {
            descuento=valorTicket*0.5;
        } else if (opcion == "2") {
            descuento=valorTicket*0.15;
        } else if (opcion == "3") {
            descuento=0;
        }
        costo=(valorTicket-descuento)*cantidad;
        mensaje = "Total a pagar: $"+costo;        
        mensajeTotal.textContent = mensaje;       
        
    }
}