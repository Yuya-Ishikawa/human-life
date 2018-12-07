<?php
class Menu {
  protected $name;
  protected $price;
  protected $image;
  protected $test;
  protected $highschool;
  protected $interest;
  protected $comment1;
  protected $comment2;
  protected $comment3;
  protected $comment4;
  protected $comment5;
  protected $comment6;
  protected static $count = 0;
  
  public function __construct($name, $price, $image, $test, $highschool,
    $interest, $comment1, $comment2, $comment3, $comment4, $comment5, $comment6) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    $this->test = $test;
    $this->highschool = $highschool;
    $this->interest = $interest;
    $this->comment1 = $comment1;
    $this->comment2 = $comment2;
    $this->comment3 = $comment3;
    $this->comment4 = $comment4;
    $this->comment5 = $comment5;
    $this->comment6 = $comment6;
    self::$count++;
  }
  
  public function hello() {
    echo '私は'.$this->name.'です';
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getImage() {
    return $this->image;
  }
  
  public function getPrice() {
    return $this->price;
  }

  public function getTest() {
    return $this->test;
  }
  
  public function getHighschool() {
    return $this->highschool;
  }

  public function getInterest() {
    return $this->interest;
  }
  
  public function getComment1() {
    return $this->comment1;
  }

  public function getComment2() {
    return $this->comment2;
  }
  
  public function getComment3() {
    return $this->comment3;
  }
  
  public function getComment4() {
    return $this->comment4;
  }

  public function getComment5() {
    return $this->comment5;
  }

  public function getComment6() {
    return $this->comment6;
  }
  
  public function getReviews($reviews) {
    $reviewsForMenu = array();
    foreach ($reviews as $review) {
      if ($review->getMenuName() == $this->name) {
        $reviewsForMenu[] = $review;
      }
    }
    return $reviewsForMenu;
  }
  
  
  public static function getCount() {
    return self::$count;
  }
  
  public static function findByName($menus, $name) {
    foreach ($menus as $menu) {
      if ($menu->getName() == $name) {
        return $menu;
      }
    }
  }
  
}
?>