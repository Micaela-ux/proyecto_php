<section class="py-5 my-4">
    <header class="container-fluid text-center bg-rosa-oscuro py-5">    
        <h3 class="text-uppercase text-bodoni-moda"> <?= $titulo ?> </h3>
    </header>

    <div class="container d-flex flex-column justify-content-center align-items-center p-5">   

        <form action="form/procesar_datos_usuario.php" method="POST">

            <legend class="text-center">Complete el siguiente formulario para registrarte.</legend>
            
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre: </label>
                <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Ingrese su nombre" required>
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido: </label>
                <input type="text" id="apellido" class="form-control" name="apellido" placeholder="Ingrese su apellido" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email: </label>
                <input type="email" id="email" class="form-control" name="email" placeholder="Ingrese su email" required>
            </div>

            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña: </label>
                <input type="password" id="contrasena" class="form-control" name="contrasena" placeholder="Ingrese una contraseña" required>
            </div>

            <button type="submit" class="btn bg-rosa-oscuro">Registrate</button>

        </form>

    </div>

</section>