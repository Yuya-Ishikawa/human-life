<?php 
require_once('menu.php');

class Member extends Menu {
  private $type;
  
  public function __construct($name, $price, $image, $test, $highschool,
  $interest, $comment1, $comment2, $comment3, $comment4, $comment5, $comment6) {
    parent::__construct($name, $price, $image, $test, $highschool,
    $interest, $comment1, $comment2, $comment3, $comment4, $comment5, $comment6); 
    $this->type = '高校生支援団体 bridge';
  }
  
  public function getType() {
    return $this->type;
  }
  
  public function setType($type) {
    $this->type = $type;
  }
  
}

?>