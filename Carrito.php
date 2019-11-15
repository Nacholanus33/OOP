<?php
include ("producto.php");
class Carrito{
  private $idCarrito;
  private $fechaDeCreacion;
  private $cantidadDeProductos;
  private $precioTotal;
  private $productos = [];

  public function __construct($fechaDeCreacion,$cantidadDeProductos){
    $this->fechaDeCreacion = $fechaDeCreacion;
    $this->cantidadDeProductos = $cantidadDeProductos;
  }
  public function getId(){
    return $this->id;
  }
  public function getFecha(){
    return $this->fechaDeCreacion;
  }
  public function getCantidad(){
    return $this->cantidadDeProductos;
  }
  public function getPrecio(){
    return $this->precioTotal;
  }
  public function agregarProducto(Producto $producto){
    $this->productos[] = $producto;
    $this->cantidadDeProductos = count($this->productos);
    $this->precioTotal = $precioTotal + $this->$producto->getPrecio();
  }
  public function quitarProducto(Producto $producto){
    for ($i=0; $i < count($this->productos); $i++) {
      if ($this->productos[$i]->getIdProducto() ==  $producto->getIdProducto()) {
        unset($this->productos[$i]);
      }
    }
    $this->cantidadDeProductos = $cantidadDeProductos - 1;
    $this->precioTotal = $precioTotal - $this->$producto->getPrecio()
  }
  public function eliminarCarrito(){

  }
  public function confirmarCarrito(){

  }
}








 ?>
