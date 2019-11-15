<?php
class Producto {
  private $idProducto;
  private $nombreProducto;
  private $descripcion;
  private $precio;
  private $stock;
}
  public function getIdProducto() {
    return $this->idProducto;
  }
  public function getNombreProducto() {
    return $this->nombreProducto;
  }
  public function getDescripcion() {
    return $this->descripcion;
  }
  public function getPrecio() {
    return $this->precio;
  }
  public function getStock() {
    return $this->stock;
  }
  public function setIdProducto($idProducto) {
    $this->idProducto=$idProducto;
  }
  public function setNombreProducto($nombreProducto) {
    $this->nombreProducto=$nombreProducto;
  }
  public function setDescripcion($descripcion) {
    $this->descripción=$descripción;
  }
  public function setPrecio($precio) {
    $this->precio=$precio;
  }
  public function setStock($stock) {
    $this->stock=$stock;
  }
  
}
 ?>
