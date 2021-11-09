<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\assets\AppAssetHeader;

Yii::setAlias('keanggotaan',  'keanggotaan/site/login');
Yii::setAlias('opac',  'opac/site');
Yii::setAlias('digitalcollection',  'digitalcollection/site');


AppAssetHeader::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!-- Favicons -->
    <link rel="shortcut icon" type='image/x-icon' href="/../favicon.png">
    <?php $this->head() ?>
</head>
<body>
<div class="wrapper">
    <?php
    NavBar::begin([
 
            'brandLabel'=>Html::img('@web/uploaded_files/aplikasi/sipuja.gif', ['alt'=>Yii::$app->name]),
            
            'brandOptions' => [
            'class' => 'collapse navbar-collapse '],
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg navbar-fixed-top ',
            'style'=>'background-color: lightblue;',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site']],
        ['label' => 'Koleksi Digital', 'url' => ['/site/digitalcollection']],
        ['label' => 'Koleksi Buku', 'url' => [yii\helpers\Url::to('@opac')]],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Daftar', 'url' => ['/pendaftaran/index']];
        $menuItems[] = ['label' => 'Login', 'url' => [yii\helpers\Url::to('@keanggotaan')]];
    } else {
        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,

    ]);
    NavBar::end();
    ?>
    </div>
   <br>
<?php $this->beginBody() ?>

  <div class="container mt-3" style="max-width :100%;;">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
<!-- </div>  -->

    <footer class="footer main-footer">
        <div class="container-fluid">
            <div class="pull-right hidden-sm" style="font-family: Arial, Helvetica, sans-serif">
            <?=\Yii::$app->params['footerInfoRight'];?>
        </div>
        <?= yii::t('app',\Yii::$app->params['footerInfoLeft']); ?> &copy; <?= yii::t('app',\Yii::$app->params['year']); ?> <a href="http://inlislite.perpusnas.go.id" target="_blank"><?= yii::t('app','Perpustakaan Nasional Republik Indonesia') ?></a>
</div> <!-- /.container -->
</footer>

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>