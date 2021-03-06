<?php

/* @var $this \yii\web\View */
/* @var $content string */

use guestbook\assetsb\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

$asset = AppAsset::register($this);
$baseurl = $asset->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?> 
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl . '/web'?>/css/guestbook.css" type="text/css" />
   
</head>
<body>

<?php $this->beginBody() ?>

<div class="wrap">


    <div class="container">

        <?php //= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
