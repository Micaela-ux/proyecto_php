<?php

    class Producto {

        private $id;
        private $nombre;
        private $descripcion;
        private $precio;
        private $imagen;
        private $categoria;
        private $modelo;
        private $material;
        private $temporada;
        private $lanzamiento;
        private $destacado;

        // Devuelve todos los productos
        public function catalogo_completo(): array {
            
            $catalogo = [];
            $JSON = file_get_contents('datos/productos.json');
            $JSONData = json_decode($JSON);

            foreach ($JSONData as $value) {
                
                $producto = new self();

                $producto->id = $value->id;
                $producto->nombre = $value->nombre;
                $producto->descripcion = $value->descripcion;
                $producto->precio = $value->precio;
                $producto->imagen = $value->imagen;
                $producto->categoria = $value->categoria;
                $producto->modelo = $value->modelo;
                $producto->material = $value->material;
                $producto->temporada = $value->temporada;
                $producto->lanzamiento = $value->lanzamiento;
                $producto->destacado = $value->destacado;
               
                $catalogo[] = $producto;
            }

            return $catalogo;
        }

        // Devuelve los producto de una cátegoria especifica
        public function catalogo_x_categoria(string $categoria): array {

            $resultado = [];
            $catalogo = $this->catalogo_completo();

            foreach ($catalogo as $producto) {
                if ($producto->categoria == $categoria) {
                    $resultado[] = $producto;
                }
            }
            return $resultado;
        }

        // Devuelve catalogo destacados
        public function catalogo_destacados(): array {

            $resultado = [];
            $catalogo = $this->catalogo_completo();

            foreach ($catalogo as $producto) {
                if ($producto->destacado == 'si') {
                    $resultado[] = $producto;
                }
            }
            return $resultado;

        }

        // Devuelve los datos de un producto
        public function producto_x_id(int $idProducto): Producto {
            $catalogo = $this->catalogo_completo();

            foreach ($catalogo as $producto) {
                if ($producto->id == $idProducto) {
                    return $producto;
                }
            }
            return null;
        }

        // ----- Getter -----

        /**
         * Get the value of id
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * Get the value of nombre
         */
        public function getNombre()
        {
            return $this->nombre;
        }

        /**
         * Get the value of descripcion
         */
        public function getDescripcion()
        {
            return $this->descripcion;
        }

        /**
         * Get the value of precio
         */
        public function getPrecio()
        {
            return $this->precio;
        }

        /**
         * Get the value of imagen
         */
        public function getImagen()
        {
            return $this->imagen;
        }

        /**
         * Get the value of categoria
         */
        public function getCategoria()
        {
            return $this->categoria;
        }

        /**
         * Get the value of modelo
         */
        public function getModelo()
        {
            return $this->modelo;
        }

        /**
         * Get the value of material
         */
        public function getMaterial()
        {
            return $this->material;
        }

        /**
         * Get the value of temporada
         */
        public function getTemporada()
        {
            return $this->temporada;
        }

        /**
         * Get the value of lanzamiento
         */
        public function getLanzamiento()
        {
            return $this->lanzamiento;
        }


        /**
         * Get the value of destacado
         */ 
        public function getDestacado()
        {
                return $this->destacado;
        }
    }

?>