<!DOCTYPE html>
    <html lang="es">
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CON ESTE CODIGO PODEMOS PONER UNA IMAGEN .ICO EN LA PESTAÑA DE LA PAGINA -->
        <link rel="shortcut icon" href="IMG/logoDL.ico" type="image/x-icon">
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
        <link rel="stylesheet" href="View_User.scss"/>
        <link rel="stylesheet" href="../Alertas/Mensaje_Confirmacion/Mensaje_Confirmacion_scss.scss"/>
        <link rel="stylesheet" href="../ViewServices/View_Services.scss">
        <link rel="stylesheet" href="../Css_global/Normalice.scss"/>
        <title>Busca tu Documento</title>
        </head>
        <body>

            <!-- message of alert -->
        <?php require_once '../Alertas/Mensaje_Confirmacion/Mensaje_Confirmacion_html.php'; ?>

        <!-- header of the page -->
        <?php require_once '../ViewServices/Elements/Header_View_Services.php' ?>


        </body>
</html>
