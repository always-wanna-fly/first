<?php


use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

 <header>
 	 	<div class="container">	
 <div class="wrap">
     <div class="container">
         <ul class="nav nav-pills">
             <li role="presentation" class="active"><?=Html::a('Головна', '/web/')?></li>
             <li role="presentation"><?=Html::a('Статті', ['post/index'])?></li>
             <li role="presentation"><?=Html::a('Cтаття', ['post/show'])?></li>
         </ul>

         <?php  if(isset($this->blocks['block1'])): ?>
        <?php echo $this->blocks['block1']?>
        <?php endif;  ?>

         <?= $content?>
     </div>

 </div>


</div> 
</header>
<?php $this->endBody() ?>
</body>
</html><?php $this->endPage() ?>