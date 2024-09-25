
document.getElementById("botonRegistro").addEventListener("click", Registro);
document.getElementById("botonInicioSesion").addEventListener("click", IniciarSesion);
window.addEventListener("resize", Responsive);

var ContenedorFormularios=document.querySelector(".ContenedorFormularios");
var formulario_Inicio=document.querySelector(".formularioInicio");
var formulario_Registro=document.querySelector(".formularioRegistro");
var Contenedor_Inicio=document.querySelector(".ContenedorInicio");
var Contenedor_Registro=document.querySelector(".ContenedorRegistro");

function Responsive(){
    if(window.innerWidth>850)
    {
        Contenedor_Inicio.style.display="block";
        Contenedor_Registro.style.display="block";
    }else{
        Contenedor_Registro.style.display="block";
        Contenedor_Registro.style.opacity="1";
        Contenedor_Inicio.style.display="none";
        formulario_Inicio.style.display="block";
        formulario_Registro.style.display="none";
        ContenedorFormularios.style.left="0px";
    }
}
function Registro(){
    if(window.innerWidth>850){
        formulario_Registro.style.display="block";
        ContenedorFormularios.style.left="410px";
        formulario_Inicio.style.display="none";
        Contenedor_Registro.style.opacity="0";
        Contenedor_Inicio.style.opacity="1";
    }else{
        formulario_Registro.style.display="block";
        ContenedorFormularios.style.left="0px";
        formulario_Inicio.style.display="none";
        Contenedor_Registro.style.display="none";
        Contenedor_Inicio.style.display="block";
        Contenedor_Inicio.style.opacity="1";
    }
}
Responsive();
function IniciarSesion(){
    if(window.innerWidth>850){
        formulario_Registro.style.display="none";
        ContenedorFormularios.style.left="10px";
        formulario_Inicio.style.display="block";
        Contenedor_Registro.style.opacity="1";
        Contenedor_Inicio.style.opacity="0";
    }else{
        formulario_Registro.style.display="none";
        ContenedorFormularios.style.left="0px";
        formulario_Inicio.style.display="block";
        Contenedor_Registro.style.display="block";
        Contenedor_Inicio.style.display="none";
    }
}
