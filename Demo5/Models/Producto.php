<?php
    class Producto{
        public function ObtenerProductos(){
            include 'conexion.php'; //Llama al archivo
            $conecta=new Conectar(); //Crea la instancia
            $consulta="SELECT * FROM Productos";
            $query=$conecta->prepare($consulta);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            return $query->fetchAll();
        }
    }
?>