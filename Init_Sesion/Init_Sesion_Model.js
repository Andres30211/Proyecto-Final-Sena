export class InitSesion_Register_User {
    constructor() {
    }

    mostrarContrasenaOcultarIcon(input, icon) {

        if (input.type === 'password') {
            input.type = 'text';
            icon.style.opacity = .4;

        } else {
            input.type = 'password';
            icon.style.opacity = .8;
        }

    }

    mostrarModalRegister(modal, txtModal, message) {
        txtModal.innerHTML = message;
        modal.classList.add('modal__show');
    }

    ocultarModalRegister(modal) {
        modal.classList.remove('modal__show');
    }

    //Función para el formulario izquierdo - Confirmación de datos------->

    confirmarDatosRegister(modal, celular, nombreCompleto, ciudad, contrasena, contrasenaConfirmar, txtModal, mostrarDatoRegister) {

        //Condicionales para el formulario izquierdo del inicio --------->

        if (celular.value == 0 || celular.value == '') {

            this.mostrarModalRegister(modal,
                    txtModal,
                    '¡Debe de inresqar un celular!');

        } else if (nombreCompleto.value == 0 || nombreCompleto.value == '') {

            this.mostrarModalRegister(modal,
                    txtModal,
                    '¡Debes ingresar un nombre!');

        } else if (ciudad.value == 0 || ciudad.value == '') {

            this.mostrarModalRegister(modal,
                    txtModal,
                    '¡Debes elegir una ciudad!');

        } else if (contrasena.value == 0 || contrasena.value == '') {

            this.mostrarModalRegister(modal,
                    txtModal,
                    `¡Debes ingresar una contraseña valida
                                       valor permitido de 0 - 9`);

        } else if (contrasenaConfirmar.value == 0 || contrasenaConfirmar.value == '') {

            this.mostrarModalRegister(modal,
                    txtModal,
                    `¡Debes confirmar la contraseña <br>
                                       valor permitido de 0 - 9`);

        } else if (contrasena.value != contrasenaConfirmar.value) {

            this.mostrarModalRegister(modal,
                    txtModal,
                    '¡Las contraseñas deben ser iguales!');

        } else {

            const datosRegistro = {
                telefono        : celular.value,
                nombreCompleto  : nombreCompleto.value,
                ciudad          : ciudad.value,
                contrasena      : contrasena.value
            };

            const data = JSON.stringify(datosRegistro);
            const url = 'Init_Sesion_Controller.php';
            const funcion = 'registrar';
            const enviarDatos = new FormData();

            enviarDatos.append('datos', data);
            enviarDatos.append('funcion', funcion);

            fetch(url, {
                method: 'post',
                body: enviarDatos
            })
                    .then(response => response.text())
                    .then(result => {

                        if (result === 'existe') {
                            this.mostrarModalRegister(modal,
                                    txtModal,
                                    '¡Ya existe un usuario con esos datos!');

                            celular.value = '';
                            nombreCompleto.value = '';
                            ciudad.value = '';
                            contrasena.value = '';
                            contrasenaConfirmar.value = '';

                        } else if (result === 'registrado') {
                            this.mostrarModalRegister(modal,
                                    txtModal,
                                    '¡Se registro fue exitoso!');

                            celular.value = '';
                            nombreCompleto.value = '';
                            ciudad.value = '';
                            contrasena.value = '';
                            contrasenaConfirmar.value = '';
                        }
                    })
                    .catch(error => {
                        console.error('ERROR: ', error);
                    });
        }

    }

    //Función para el formulario derecho - Confirmación de datos------->
    confirmarDatosIngresar(modalInitSesion, celularInitSesion, contrasenaInitSesion, txtModal) {

        if (celularInitSesion.value == 0 || celularInitSesion.value == '') {

            this.mostrarModalRegister(modalInitSesion,
                    txtModal,
                    '¡Debes ingresar un celular!');

        } else if (contrasenaInitSesion.value == 0 || contrasenaInitSesion.value == '') {

            this.mostrarModalRegister(modalInitSesion,
                    txtModal,
                    '¡Debes ingresar una contraseña!');

        } else {

            const datosInicioSesion = {
                celular     : celularInitSesion.value,
                contrasena  : contrasenaInitSesion.value
            };
            
            const data = JSON.stringify(datosInicioSesion);
            const funcion = 'initSesion';
            const url = 'Init_Sesion_Controller.php';

            const enviarData = new FormData();
            enviarData.append('datos', data);
            enviarData.append('funcion', funcion);

            fetch(url, {
                method: 'post',
                body: enviarData
            })
                    .then(response => response.text())
                    .then(result => {

                        const jdata = JSON.parse(result);

                        if (jdata.resp === 'noinit') {

                            this.mostrarModalRegister(modalInitSesion,
                                                txtModal,
                                                'El usuario no existe o<br>\n\
                                                el telefono y la contraseña son incorrectos');

                            celularInitSesion.value = '';
                            contrasenaInitSesion.value = '';

                        } else if (jdata.resp === 'init' && jdata.rol === 'admin') {
                            window.location.href = '../View_Admin/View_Admin_html.php';

                        } else if (jdata.resp === 'init' && jdata.rol === 'user') {
                            window.location.href = '../View_User/View_User_html.php';
                        }

                    })
                    .catch(error => {
                        console.error('ERROR: ', error);
                    });
                    
        };
    };
    
    ViewCitys(ciudadRegister){
        
        const funcion       = 'mostrarCiudad';
        const url           = 'Init_Sesion_Controller.php';
        const enviarData    = new FormData();
        
        enviarData.append('funcion',funcion);
        
        fetch(url,{
            method  :'post',
            body    : enviarData
        })
                .then(response => response.text())
                .then(result => {
                    const citys = JSON.parse(result);
                    const defaultOption = document.createElement('option');
                    
                    defaultOption.disabled = true;
                    defaultOption.selected = true;
                    defaultOption.text = 'Elige una ciudad';
                    
                    ciudadRegister.appendChild(defaultOption);
            
                    citys.forEach(city =>{
                        const option = document.createElement('option');
                        option.value = city.citys;
                        option.text = city.citys;
                        
                        ciudadRegister.appendChild(option);
                    });
                })
                .catch(error =>{
                   console.error('ERROR: ',error); 
                });
    };

}