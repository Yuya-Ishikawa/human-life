<?php 
require_once('data.php');
require_once('menu.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>人物図鑑！</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Human Life</h1>
    <h3>掲載数<?php echo Menu::getCount() ?>名</h3>
    
    <?php foreach ($menus as $menu): ?>
      <div class="menu-item">
        <a href="show.php?name=<?php echo $menu->getName() ?>">
          <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
        </a>
        <h3 class="menu-item-name">
          <a href="show.php?name=<?php echo $menu->getName() ?>">
            <?php echo $menu->getName() ?>さん
          </a>
        </h3>
        <p class="price"><?php echo $menu->getPrice() ?></p>
        <?php if ($menu instanceof Member): ?>
          <p class="menu-item-type"><?php echo $menu->getType(); ?></p>
        <?php else: ?>
          <p class="menu-item-type"><?php echo $menu->getType(); ?></p>
        <?php endif ?>
        <p>(<?php echo $menu->getInterest() ?>)</p>

      </div>
    <?php endforeach ?>
    
    
    
    <div class="top_btn">
      <a href="http://bridge-tohoku.com">
        Top Page 
      </a>
    </div>
    

  </div>
</body>
</html>
