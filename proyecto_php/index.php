<?php

require_once 'classes/Producto.php';

$secciones_validas = [

    "home" => [
        "titulo" => "Bienvenidos a Isabelita Bebas"
    ],

    "catalogo" => [
        "titulo" => "Nuestro cátalogo"
    ],

    "detalle_producto" => [
        "titulo" => "Detalle del producto"
    ],

    "contacto" => [
        "titulo" => "Formulario de contacto"
    ],

    "usuario" => [
        "titulo" => "Ingresar o Registrate"
    ],
    
    "registro_usuario" => [
        "titulo" => "Registrate" 
    ],

    "carrito" => [
        "titulo" => "Tu carrito"
    ],

    "preguntas_frecuentes" => [
        "titulo" => "Preguntas frecuentes"
    ],

    "formas_pagos" => [
        "titulo" => "Formas de pagos"
    ],
    
    "cambios_devoluciones" => [
        "titulo" => "Cambios y Devoluciones"
    ],

    "guia_talles" => [
        "titulo" => "Guia de talles"
    ],

    "datos_alumnos" => [
        "titulo" => "Datos de los alumnos"
    ]
    
];

$seccion = $_GET['sec'] ?? "home";

if(!array_key_exists($seccion, $secciones_validas)){
    $vista = "404";
    $titulo = "404 - Página no encontrada";
}else{
    $vista = $seccion;
    $titulo = $secciones_validas[$seccion]['titulo'];
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Isabelita Bebas - <?= $titulo ?> </title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Tipografia -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&family=Calligraffitti&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Quicksand&display=swap" rel="stylesheet">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-rosa-claro fixed-top">
            <div class="container-fluid">
                
                <a class="navbar-brand ps-3" href="index.php?sec=home"><span class="isabelita">Isabelita</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <div class="navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item d-flex align-items-center">
                                <a class="nav-link" href="index.php?sec=home">
                                    <img src="imagenes/logos/logo_simple.svg" class="logos" alt="logo_home"> 
                                    Home
                                </a>
                            </li>

                            <li class="nav-item dropdown d-flex align-items-center">
                                
                                <a class="nav-link dropdown-toggle" href="index.php?sec=catalogo" role="button" data-bs-toggle="dropdown" >
                                    <img src="imagenes/iconos/icono_catalogo.svg" class="logos" alt="logo_catalogo">
                                    Cátalogo
                                </a>
                            
                                <ul class="dropdown-menu bg-rosa-claro border-0">
                                <li class="d-flex align-items-center pb-3">
                                        <a class="dropdown-item" href="index.php?sec=catalogo&prod=ajuares"> 
                                            <img src="imagenes/iconos/iconos_catalogo/icono_ajuar.svg" class="logos" alt="logo_ajuar"> 
                                            Ajuares
                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center pb-3">
                                        <a class="dropdown-item" href="index.php?sec=catalogo&prod=bodys"> 
                                            <img src="imagenes/iconos/iconos_catalogo/icono_body.svg" class="logos" alt="logo_body"> 
                                            Bodys
                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center pb-3">
                                        <a class="dropdown-item" href="index.php?sec=catalogo&prod=calzas">
                                            <img src="imagenes/iconos/iconos_catalogo/icono_calza.svg" class="logos" alt="logo_calza">
                                            Calzas
                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center pb-3">
                                        <a class="dropdown-item" href="index.php?sec=catalogo&prod=conjuntos">
                                            <img src="imagenes/iconos/iconos_catalogo/icono_conjunto.svg" class="logos" alt="logo_conjunto">    
                                            Conjuntos
                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center pb-3">
                                        <a class="dropdown-item" href="index.php?sec=catalogo&prod=enteritos">
                                            <img src="imagenes/iconos/iconos_catalogo/icono_enterito.svg" class="logos" alt="logo_enterito">    
                                            Enteritos
                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center pb-3">
                                        <a class="dropdown-item" href="index.php?sec=catalogo&prod=jumpers">
                                            <img src="imagenes/iconos/iconos_catalogo/icono_jumper.svg" class="logos" alt="logo_jumper">    
                                            Jumpers
                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center pb-3">
                                        <a class="dropdown-item" href="index.php?sec=catalogo&prod=vestidos">
                                            <img src="imagenes/iconos/iconos_catalogo/icono_vestido.svg" class="logos" alt="logo_vestido">
                                            Vestidos
                                        </a>
                                    </li>       
                                </ul>
                            </li>

                            <li class="nav-item d-flex align-items-center">
                                <a class="nav-link" href="index.php?sec=contacto">
                                    <img src="imagenes/iconos/icono_contacto.svg" class="logos" alt="logo_contacto">
                                    Contacto
                                </a>
                            </li>

                            <li class="nav-item d-flex align-items-center">
                                <a class="nav-link" href="index.php?sec=usuario">
                                    <img src="imagenes/iconos/icono_usuario.svg" class="logos" alt="logo_usuario">
                                    Iniciar Sesión
                                </a>
                            </li>

                            <li class="nav-item d-flex align-items-center">
                                <a class="nav-link" href="index.php?sec=carrito">
                                    <img src="imagenes/iconos/icono_carrito.svg" class="logos" alt="logo_carrito">
                                    Tu Carrito
                                </a>
                            </li>
                        </ul>  
                    </div>
                </div>
            </div>
        </nav>
      
        <main>
        
            <?php

                require_once file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php";

            ?>
    
        </main>
        
        <footer>
            <section class="container-fluid p-5 bg-rosa-claro">
                <div class="row d-flex justify-content-center">

                    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <header class="pt-3">
                            <h3 class="text-uppercase text-bodoni-moda">Ayuda</h3>
                        </header>
                        <nav class="navbar navbar-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link p-1" href="index.php?sec=preguntas_frecuentes">Preguntas frecuentes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link p-1" href="index.php?sec=formas_pagos">Formas de pago</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link p-1" href="index.php?sec=cambios_devoluciones">Cambios y devoluciones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link p-1" href="index.php?sec=guia_talles">Guía de talles</a>
                                </li>
                            </ul>
                        </nav>   
                    </div>
        
                    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <header class="pt-3">
                            <h3 class="text-uppercase text-bodoni-moda">Encontranos en</h3>
                        </header>
                        <nav class="navbar navbar-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="https://instagram.com/isabelita.bebas?igshid=YmMyMTA2M2Y=" target="_blank"><i class="bi bi-instagram p-2 color-rosa-oscuro"></i> @isabelita.bebas</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="https://api.whatsapp.com/send?phone=5491130430741" target="_blank"><i class="bi bi-whatsapp p-2 color-rosa-oscuro"></i> Whatsapp 1130430741</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://goo.gl/maps/Ue3ER6XSWtfkmkmL7" target="_blank"><i class="bi bi-geo-alt p-2 color-rosa-oscuro"></i> Bacacay 3161, Local 6 - Flores, Bs.As.</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <header class="text-center pt-3">
                            <h3 class="text-uppercase text-bodoni-moda">Registrate en nuestro newsletter</h3>
                        </header>    
                        <div class="d-flex flex-wrap justify-content-center align-items-center">
                            <div>
                                <img src="imagenes/logos/logo_isabelita_bebas.svg" class="logo-bebas pb-5" alt="logo_isabelita_bebas">
                            </div>
                            <div>
                                <p>¿Querés recibir nuestras novedades y ofertas?</p>
                                <form action="#" method="POST">      
                                    <div class="d-flex flex-row">
                                        <div class="form-group mb-3">
                                            <label for="email"c class="d-block"></label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu email" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn bg-rosa-oscuro">Suscribirse</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>    
                    </div>

                </div>                
            </section>

            <section class="container-fluid text-center bg-rosa-oscuro text-white py-2">  
                <p class="text-uppercase pt-2 my-2">Copyright isabelitabebas 2023. Todos los derechos reservados </p>
                <p class="text-uppercase">Programación II - DWN3BV - 
                    <a class="nav-item text-white" href="index.php?sec=datos_alumnos">Alumnos</a>
                </p>
            </section>
        </footer>
        
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>