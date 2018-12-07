<?php
require_once('menu.php');
require_once('data.php');

$menuName = $_GET['name'];
$menu = Menu::findByName($menus, $menuName);
$menuReviews = $menu->getReviews($reviews);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>人物図鑑</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="review-wrapper">
    <div class="review-menu-item">
      <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
      <h3 class="menu-item-name"><?php echo $menu->getName() ?> さん</h3>
  
      <?php if ($menu instanceof Member): ?>
        <p class="menu-item-type"><?php echo $menu->getType() ?></p>
      <?php else: ?>
        <p class="menu-item-type"><?php echo $menu->getType() ?></p>
      <?php endif ?>
      <p class="price"><?php echo $menu->getPrice() ?></p>
      <p class="price">試験種別：<?php echo $menu->getTest() ?></p>
      <p class="price">出身高校：<?php echo $menu->getHighschool() ?></p>

      <h1 class="question">Q1:大学での学業について教えてください</h1>
      <p class="answer"><?php echo $menu->getComment1() ?></p>

      <h1 class="question">Q2:課外活動はしていますか？</h1>
      <p class="answer"><?php echo $menu->getComment2() ?></p>

      <h1 class="question">Q3:将来の目標は何ですか？</h1>
      <p class="answer"><?php echo $menu->getComment3() ?></p>

      <h1 class="question">Q4:最後に高校生へひとこと！</h1>
      <p class="answer"><?php echo $menu->getComment4() ?></p>

      <h1 class="question">コラム1:得意科目の勉強法</h1>
      <p class="answer"><?php echo $menu->getComment5() ?></p>

      <h1 class="question">コラム2:苦手科目の勉強法</h1>
      <p class="answer"><?php echo $menu->getComment6() ?></p>
    </div>
    
    <div class="review-list-wrapper">
      <div class="review-list">
        <div class="review-list-title">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/review.png" class='icon-review'>
          <h4>レビュー一覧</h4>
        </div>
        <?php foreach ($menuReviews as $review): ?>
          <?php $user = $review->getUser($users) ?>
          <div class="review-list-item">
            <div class="review-user">
              <?php if ($user->getGender() == 'male'): ?>
                <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/male.png" class='icon-user'>
              <?php else: ?>
                <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/female.png" class='icon-user'>
              <?php endif ?>
              <p><?php echo $user->getName() ?></p>
            </div>
            <p class="review-text"><?php echo $review->getBody() ?></p>
          </div>
        <?php endforeach ?>
      </div>
    </div>
    <a href="index.php">← 人物図鑑の一覧へ</a>
  </div>
</body>
</html>