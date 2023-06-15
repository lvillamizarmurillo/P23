<?php
    // Un parqueadero quiere implementar un nuevo sistema para gestionar los vehículos que entran y salen de sus instalaciones. Para modelar este sistema, necesitamos crear una serie de clases y interfaces.

    // El parqueadero puede recibir dos tipos de vehículos: Coches y Motocicletas. Para modelar esto, se te pide que crees una clase abstracta Vehiculo con una propiedad para la placa y un método abstracto getType(). Luego, crea dos clases Coche y Motocicleta que extiendan de Vehiculo e implementen el método getType().
    
    // Además, que defina dos métodos: estacionar(Vehiculo $vehiculo) y retirar(Vehiculo $vehiculo).
    
    // Por último, necesitamos una clase Parqueadero que implemente la interfaz ParqueaderoInterface. Esta clase debe tener una propiedad para almacenar los vehículos que se encuentran actualmente en el parqueadero. Cuando un vehículo es estacionado, debe ser agregado a esta propiedad y cuando es retirado, debe ser eliminado de la misma.
    
    // Para probar tu código, crea un objeto Parqueadero y estaciona y retira tanto un coche como una motocicleta.
    abstract class vehiculos{
        public function __construct(public mixed $placa){
            $this->$placa = $placa;
        }
        abstract public function getType();
    };
    class carro extends vehiculos{
        public function getType(){
            return "Carro";
        }
        public function getPlaca($placa){
            
        }
    }
    class moto extends vehiculos{
        public function getType(){
            return "Moto";
        }
        public function getPlaca($placa){
        }
    }
    interface parqueaderoInterface{
        public function estacionar($vehiculo);
        public function retirar($vehiculo);
    }
    class parqueadero implements parqueaderoInterface{
        protected $almacenar = array();
        
    }
?>