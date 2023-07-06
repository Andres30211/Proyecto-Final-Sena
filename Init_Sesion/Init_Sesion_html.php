<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CON ESTE CODIGO PODEMOS PONER UNA IMAGEN .ICO EN LA PESTAÑA DE LA PAGINA -->
    <link rel="shortcut icon" href="../assets/logo/isotipo-02.png" type="image/x-icon">
    <!-- CON ESTA ETIQUETA PONEMOS UNA DESCRIPCION PARA QUE SE MUESTRE EN EL BUSCADOR -->
    <meta name="description"
        content="">
    <!-- CON ESTA ETIQUETA PONEMOS EL NOMBRE DEL CREADOR DE LA PAGINA -->
    <meta name="author" content="Andrés Felipe López">
    <!-- CON ESTA ETIQUETA PONEMOS LAS PALABRAS CLAVE PARA LA BUSQUEDA -->
    <meta name="keywords" content="">
    <!-- CON ESTAS ETIQUETAS CONFIGURAMOS LA INFORMACION QUE SE PUEDE MOSTRAR AL
         COMPARTIR UN ENLACE EN OTRAS PAGINAS
     -->
    <meta property="og:title" content="Busca tu Documento">
    <meta property="og:image" content="rutas de la imagen">
    <meta property="og:description" content="">
    <link rel="stylesheet" href="../Alertas/Mensaje_Confirmacion/Mensaje_Confirmacion_scss.scss"/>
    <link rel="stylesheet" href="Init_Sesion.scss"/>
    <link rel="stylesheet" href="../Css_global/Normalice.scss"/>
    <link rel="stylesheet" href="../Alertas/Mensaje_Confirmacion/modalMensajeRegistro/modalRegistro.scss">
    <title>Busca tu Documento - Inicio</title>
    </head>
    <body>
    
    <!-- ESTOS SON LOS ENRUTAMIENTOS PARA MOSTRAR LOS COMPONENTES DE LA PAGINA -->

    <!-- message of alert -->
    <?php require_once '../Alertas/Mensaje_Confirmacion/Mensaje_Confirmacion_html.php'; ?>

    <!-- header of the page -->
    <?php require_once 'Elements/Header_Sesion.php' ?>

    <!-- main of the page -->
    <?php require_once 'Elements/Main_Sesion.php' ?>
    
    <!--Modal with the button register-->
    <?php require_once '../Alertas/Mensaje_Confirmacion/modalMensajeRegistro/modalRegistro.php' ?>

    <script src="Init_Sesion_Controller.js" type="module" ></script>
    
    </body>
</html>