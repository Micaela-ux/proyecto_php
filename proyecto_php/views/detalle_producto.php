<?php

    $productoSeleccionado = $_GET['id'] ?? FALSE;

    $titulo = $productoSeleccionado;

    $objetoProducto = new Producto();

    $producto = $objetoProducto->producto_x_id($productoSeleccionado);

?>

<section id="producto" class="container p-3 my-3 justify-content-center">
     
    <?php if (!empty($producto)) { ?>

        <header class="container-fluid color-rosa-oscuro text-center py-5 mt-5">    
            <h4 class="text-uppercase text-bodoni-moda"> <?= $producto->getNombre(); ?> </h4>
        </header>

        <div class="row p-3">

            <div class="col-sm-6 text-center">
                    
                <img src="imagenes/img_productos/<?= $producto->getImagen(); ?>" class="img-prod" alt="Producto <?= $producto->getNombre(); ?>">
            </div>

            <div class="col-sm-6 py-3">

                <p> <?= $producto->getDescripcion(); ?> </p>

                <p> Material: <?= $producto->getMaterial(); ?> </p>

                <p> Temporada: <em> <?= $producto->getTemporada(); ?> </em> </p>

                <p> Lanzamiento: <?= $producto->getLanzamiento(); ?> </p>

                <p class="color-rosa-oscuro fs-5">Precio: $ <?= $producto->getPrecio(); ?> </p>

                <p><span class="fw-bold">6</span> cuotas sin interés de <span class="fw-bold">$ <?= round(($producto->getPrecio()/6),2); ?> </span></p>

                <a href="index.php?sec=carrito" id="<?=$producto->getId()?>" class="btn btn-c">Comprar</a>

            </div>

        </div>

        <div class="row container p-5">
            <h5 class="p-3 color-rosa-oscuro"><i class="bi bi-box-seam"></i> Tiempo de empaquetado</h5>
            <p>Tu compra se empaqueta dentro de los 3 a 4 días hábiles de confirmado el pago. Luego de ese tiempo se despacha al correo de tu elección.</p>
            
            <h5 class="p-3 color-rosa-oscuro"><i class="bi bi-box-seam"></i> Tiempos de entrega de los correos</h5>
            <p>Una vez despachado tu compra al correo, lo tiempos usuales de entrega de los correos son los que figuran arriba, <strong>TODA DEMORA EXTRA POR PARTE DE ELLOS ES AJENA A NUESTRA EMPRESA</strong>, ya que es un servicio tercerizado.</p>
            
            <h5 class="p-3 color-rosa-oscuro"> <i class="bi bi-whatsapp"></i> Comunicate con nosotros</h5>
            <p>Cualquier problema te comunicas con nosotros y te ayudamos a resolverlo, siempre hay una persona humana para responder el chat de Isabelita Bebas!!!</p>
        </div>
           
    <?php } else { ?>
        <div class="row">
            <p class="text-center p-5">No se encontró el producto deseado.</p>
        </div>
           
    <?php } ?>


</section>

