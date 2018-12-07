<?php 
require_once('menu.php');

class Other extends Menu {
  private $type;
  
  public function __construct($name, $price, $image) {
    parent::__construct($name, $price, $image);
    $this->type = '掲載のみ';
  }
  
  public function getType() {
    return $this->type;
  }
  
  public function setType($type) {
    $this->type = $type;
  }
  
}

?>