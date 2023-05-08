<section class="py-5 my-4">
    <header class="container-fluid text-center bg-rosa-oscuro py-5">    
        <h2 class="text-uppercase text-bodoni-moda"> <?= $titulo ?> </h2>
    </header>

    <div class="container p-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex justify-content-center">
                <div class="container border shadow p-5">
                    <form action="#" method="POST">
                        <h3>Ya tengo una cuenta</h3>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email: </label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="Ingrese su email">
                        </div>

                        <div class="mb-3">
                            <label for="contrasena" class="form-label">Contraseña: </label>
                            <input type="password" id="contrasena" class="form-control" name="contrasena" placeholder="Ingrese su contraseña">
                        </div>
                        <a href="#" class="btn bg-rosa-oscuro text-uppercase" role="button">Iniciar sesion</a>
                    </form>
                </div>
            </div>
            
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex justify-content-center">
                <div class="container border shadow p-5">
                    <h3>Crea tu cuenta</h3>
                    <ul> Crea una cuenta y aprovecha los beneficios:
                        <li>Realiza tus compras de manera más ágil.</li>
                        <li>Guardar múltiples direcciones de envío y facturación.</li>
                        <li>Realiza el seguimiento a tus compras y revisa tus pedidos realizados.</li>
                        <li>Haz una lista de productos favoritos.</li>
                    </ul>
                    <a href="index.php?sec=registro_usuario" class="btn bg-rosa-oscuro text-uppercase" role="button">Registrate</a>
                </div>
            </div>
        </div>
    </div>
</section>