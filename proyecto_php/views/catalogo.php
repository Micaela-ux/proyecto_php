<?php

    $categoriaSeleccionada = $_GET['prod'] ?? FALSE;
    
    $titulo = $categoriaSeleccionada;

    $objetoProducto = new Producto();

    $catalogo = $objetoProducto->catalogo_x_categoria($categoriaSeleccionada);

?>

<section id="catalogo" class="py-5 my-4">
    
    <header class="container-fluid text-center bg-rosa-oscuro py-5">    
        <h3 class="text-uppercase text-bodoni-moda"> <?= $titulo ?> </h3>
    </header>

    <div class="container py-3">
        <div class="row text-center py-3">

            <?php foreach ($catalogo as $producto) { ?>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3 d-flex justify-content-center mb-3">
                    
                    <div class="card border-card p-2" style="width: 20rem;">

                        <img src="imagenes/img_productos/<?= $producto->getImagen() ?>" class="img-prod" alt="Producto <?= $producto->getNombre(); ?> ">
                        
                        <div class="card-body">

                            <h4 class="card-title"> <?= $producto->getNombre() ?> </h4>

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




