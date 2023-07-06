import {InitSesion_Register_User} from './Init_Sesion_Model.js';

//Constantes para el formulario izquierdo - Datos ------>
const iconMostrarEye              = document.getElementById('mostrar__contrasena');
const input                       = document.getElementById('contrasenaRegister');
const iconMostrarEye02            = document.getElementById('icon__confimarContrasena');
const input02MostrarEye           = document.getElementById('confirmarContrasena'); 
const btnRegister                 = document.getElementById('form__left');
const celularRegister             = document.getElementById('celularRegister');   
const nombreCompletoRegister      = document.getElementById('nombreCompletoRegister');  
const contrasenaRegister          = document.getElementById('contrasenaRegister'); 
const confirmarContrasenaRegister = document.getElementById('confirmarContrasena');
const ciudadRegister              = document.getElementById('ciudad');
const mostrarDatoRegister         = document.getElementById('mostrarDato');

//Capturar valores para los modales
const modalRegister               = document.getElementById('modal');
const txtModalRegister            = document.getElementById('txt__modal');
const modalCloseRegister          = document.getElementById('cerrarModal');

//Constantes para el formulario derecho - Datos ------------>
const celularInitSesion           = document.getElementById('celularInitSesion');
const contrasenaInitSesion        = document.getElementById('contrasenaInitSesion');
const btnInitIngresar             = document.getElementById('form_rigth');
const iconMostrarEyeRight         = document.getElementById('mostrar__contrasena-Ingresar');

//Mostrar contraseña con el icon eye ------------>

const userSesion = new InitSesion_Register_User();

iconMostrarEye.addEventListener('click', ()=>{
    userSesion.mostrarContrasenaOcultarIcon(input,iconMostrarEye);
});

iconMostrarEye02.addEventListener('click', ()=>{
    userSesion.mostrarContrasenaOcultarIcon(input02MostrarEye, iconMostrarEye02)
});

iconMostrarEyeRight.addEventListener('click', ()=>{
    userSesion.mostrarContrasenaOcultarIcon(contrasenaInitSesion,iconMostrarEyeRight)
});

//---------------------------------------------->

//Abrir modal de resgistro con btn registro ------------------->

btnRegister.addEventListener('submit', e=>{
    e.preventDefault();
    userSesion.confirmarDatosRegister(modalRegister,
                                       celularRegister,
                                       nombreCompletoRegister,
                                       ciudadRegister,
                                       contrasenaRegister,
                                       confirmarContrasenaRegister,
                                       txtModalRegister, 
                                       mostrarDatoRegister);
                                       
});

//Cerrar modal del registro con btn registro---------------------->

modalCloseRegister.addEventListener('click', ()=>{

        userSesion.ocultarModalRegister(modalRegister);
        
    
});

btnInitIngresar.addEventListener('submit', e=>{
    e.preventDefault();
    
    userSesion.confirmarDatosIngresar(modalRegister,
                                    celularInitSesion, 
                                    contrasenaInitSesion,
                                    txtModalRegister);
});

//Mostrar las ciudades con las cuales se pueden registrar----------------------------->

userSesion.ViewCitys(ciudadRegister);