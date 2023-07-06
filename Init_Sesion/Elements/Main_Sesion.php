<main class="content_principal">

    <div class="content__form">
        <div class="form__left">
            <div class="title__form-left">
                <h4 id="title__registrarse">Registrarse</h4>
            </div>
            <form class="form" id="form__left">
                <div class="group__principal">
                    <label class="label__form-left" for="celular">Celular</label>
                    <input class="input__form-lefth celular"  id="celularRegister" type="number" placeholder="Ingresar celular">
                </div>
 
                <div class="group__principal">
                    <label class="label__form-left" for="nombreCompleto">Nombre Completo</label>
                    <input class="input__form-lefth nombreCompleto" id="nombreCompletoRegister" type="text" placeholder="Ingresar nombreCompleto">
                </div>

                <div class="group__principal-select">
                    <label class="label__form-left" for="ciudad">Ciudad</label>
                    <select name="ciudad" id="ciudad" required>
                       
                    </select>
                </div>

                <div class="group__principal form-eye">
                    <label class="label__form-left" for="contrasena">Contraseña</label>
                    <input id="contrasenaRegister" class="input__form-lefth contrasena" type="password" placeholder="Ingresar Contraseña">
                    <img class="icon" id="mostrar__contrasena" src="../assets/icons/eye-solid.svg" alt="ojoIcono">
                </div>

                <div class="group__principal form-eye">
                    <label class="label__form-left" for="confirmarContrasena">Confirmar contraseña</label>
                    <input id="confirmarContrasena" class="input__form-lefth confirmarContrasena " type="password" placeholder="confirmarContrasena">
                    <img class="icon" id="icon__confimarContrasena" src="../assets/icons/eye-solid.svg" alt="ojoIcono">
                </div>

                <div class="group__button">
                    <button type="submit" class="btn-registrar">Registrar</button>
                </div>
            </form>
        </div>
        <div class="form__rigth">
            <div class="title__form-left">
                <h4>Iniciar sesión</h4>
            </div>
            <form class="form" id="form_rigth">
                <div class="group__secundary">
                    <label class="label__form-right" for="celular">Celular</label>
                    <input class="input__form-right celular" id="celularInitSesion" type="number" placeholder="Ingresar celular">
                </div>

                <div class="group__secundary">
                    <label class="label__form-right" for="contrasena">Contraseña</label>
                    <input class="input__form-right contrasena" id="contrasenaInitSesion" type="password" placeholder="Ingresar Contraseña">
                    <img class="icon_Ingresar" id="mostrar__contrasena-Ingresar" src="../assets/icons/eye-solid.svg" alt="ojoIcono">
                </div>

                <div class="group__secundary-right">
                    <a href="../View_OlvidarContrasena/View_OlvidarContrasena_html.php"><span>¿Olvidaste la contraseña?</span></a>
                </div>

                <div class="group__button">
                    <button type="submit" class="btn-ingresar">Ingresar</button>
                </div>
            </form>
        </div>
  
        <div class="redes">
            <div class="linea">
                <img src="../assets/linea/linepEQ-03-03.png" alt="linea">
            </div>
            <div class="redesSociales">
                <a href="#"><img src="../assets/icons/icons__01-03.png" alt="Linkedin-icon"></a>
                <a href="#"><img src="../assets/icons/icons__01-05.png" alt="isntagram-icon"></a>
                <a href="#"><img src="../assets/icons/icons__01-04.png" alt="facebook-icon"></a>
            </div>
        </div>
    </div>
  
</main>
