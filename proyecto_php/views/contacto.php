<section class="py-5 my-4">
    <header class="container-fluid text-center bg-rosa-oscuro py-5">    
        <h2 class="text-uppercase text-bodoni-moda"> <?= $titulo ?> </h2>
    </header>
    
    <div class="container d-flex flex-column justify-content-center align-items-center p-5">   

        <form action="form/procesar_datos.php" method="POST">
   
            <legend class="text-center py-4">Complete el siguiente formulario y nos pondremos en contacto a la brevedad.</legend>
            
            <div class="mb-3 pt-3">
                <label for="nombre" class="form-label">Nombre: </label>
                <input type="text" id="nombre" class="form-control w-70" name="nombre" placeholder="Ingrese su nombre" required >
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido: </label>
                <input type="text" id="apellido" class="form-control w-70" name="apellido" placeholder="Ingrese su apellido" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email: </label>
                <input type="email" id="email" class="form-control w-70" name="email" placeholder="Ingrese su email" required>
            </div>

            <div class="mb-3">
                <label for="comentario" class="form-label">Comentario: </label>
                <textarea type="text" id="comentario" class="form-control w-70" name="comentario" placeholder="Comentenos sus duda ..." required > </textarea>
            </div>

            <button type="submit" class="btn bg-rosa-oscuro w-70">Enviar</button>

        </form>

    </div>
  
</section>