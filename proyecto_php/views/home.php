<?php
    $objetoProducto = new Producto();
    $catalogo = $objetoProducto->catalogo_destacados();
?>

<section id="nosotros">
    <header>  
        <h1 id="h1">Isabelitas bebas</h1>
    </header>
    <div class="container py-5 my-4"> 
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagenes/img_inicio/banner_isabelita.png" class="d-block w-100" alt="banner_isabelita">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/img_inicio/banner_otono.png" class="d-block w-100" alt="banner_otoño">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/img_inicio/banner_cuotas.png" class="d-block w-100" alt="banner_cuotas">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    
    <div class="container py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-center">
                <div>
                    <p>Somos una <strong class="color-rosa-oscuro">marca mayorista</strong> de ropa de bebés para nenas, que nace en el año 2019. Es una empresa familiar, que busca satisfacer la necesidades de una mamá.</p>
                    <p> Nuestros estampados nos definen. A su vez, la selección de textiles <strong class="color-rosa-oscuro">muy suaves y delicados</strong> para la piel de un recién nacido. Los primeros meses de vida, los acompañamos con diseños pensados y prácticos, en tonos claros y estampados exclusivos.</p>
                    <p>Nuestro éxito es producto, de ropita cómoda con diseño, que marca una diferencia a la hora de elegir.</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8 d-flex justify-content-center">
                <img src="imagenes/img_inicio/banner_bebas.png" class="banner" alt="banner_bebas">
            </div>
        </div>
    </div>
</section>

<section id="categorias_inicio">
    <header class="bg-rosa-claro text-center p-5">
        <h2 class="color-rosa-oscuro"><span class="isabelita">Isabelita</span> BEBAS</h2>
        <p class="pt-3">Ropita hecha con amor, inspirado para nuestras Pricesas</p>
    </header>
    <div class="container p-3 text-center">
        <div class="row py-5">
            <div class="col-sm-4 pt-3"> 
                <div class="card shadow">
                    <a href="index.php?sec=catalogo&prod=conjuntos"><img class="card-img-top" src="imagenes/img_inicio/img_card_conjuntos.png"></a>
                    <div class="card-body">
                        <h3>Conjuntos</h3>
                        <p class="card-text"> Los conjuntos más lindos.</p>
                    </div>
                 </div>
            </div>

            <div class="col-sm-4 pt-3"> 
                <div class="card shadow">
                    <a href="index.php?sec=catalogo&prod=ajuares"><img class="card-img-top" src="imagenes/img_inicio/img_card_ajuares.png"> </a>
                    <div class="card-body">
                        <h3>Ajuares</h3>
                        <p class="card-text"> Acompañando desde el primer día.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 pt-3"> 
                <div class="card shadow">
                    <a href="index.php?sec=catalogo&prod=bodys"><img class="card-img-top" src="imagenes/img_inicio/img_card_bodys.png"></a>
                    <div class="card-body">
                        <h3>Bodys</h3>
                        <p class="card-text"> Para nuestras princesas los mejores bodys.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="destacados">
    <header class="bg-rosa-claro text-center p-5">
        <h2 class="color-rosa-oscuro text-uppercase">Destacados <i class="bi bi-stars"></i></h2>
    </header>
    <div class="container py-3">
        <div class="row text-center py-3">

            <?php foreach ($catalogo as $producto) { ?>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3 d-flex justify-content-center mb-3">
                    
                    <div class="card border-card p-2" style="width: 20rem;">

                        <img src="imagenes/img_productos/<?= $producto->getImagen() ?>" class="img-prod" alt="Producto <?= $producto->getNombre(); ?> ">
                        
                        <div class="card-body">

                            <h3 class="card-title"> <?= $producto->getNombre() ?> </h3>

                            <p class="card-text color-rosa-oscuro fs-5"> $ <?= $producto->getPrecio() ?> </p>

                            <p class="card-text"><span class="fw-bold">6</span> cuotas sin interés de <span class="fw-bold">$ <?= round(($producto->getPrecio()/6),2); ?> </span></p>

                            
                            <a href="index.php?sec=detalle_producto&id=<?=$producto->getId()?>" id="<?=$producto->getId()?>" class="btn btn-c">Comprar</a>
                            <a href="index.php?sec=detalle_producto&id=<?=$producto->getId()?>" class="btn btn-v"> <i class="bi bi-eye"></i> Ver</a>
                            
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</section>