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
    <div class="c0l-lg-6">
    <?php
    NavBar::begin([
 
        'brandLabel'=>Html::img('@web/uploaded_files/aplikasi/sipuja.gif', ['alt'=>Yii::$app->name]),
        'brandOptions' => [
        'class' => 'collapse navbar-collapse '],
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
        'class' => 'navbar navbar-expand navbar-fixed-top  ',
        'style'=>'border-bottom: 3px solid #7952B3;',
        ],
    ]);
    $menuItems = [
        ['options'=> ['class'=>['icon'=>'fa fa-home fa-lg']],
        'label' => ' Home', 
        'url' => ['/site']
    ],
   
        ['options'=> ['class'=>['icon'=>'fa fa-book fa-lg ']],
        'label' => 'Koleksi Digital', 
        'url' => ['/site/digitalcollection']
],
        ['options'=> ['class'=>['icon'=>'fa fa-archive fa-lg']],           
        'label' => 'Koleksi Buku', 
        'url' => [yii\helpers\Url::to('@opac')],
        'content'=>'|'
],
    ];
    if (Yii::$app->user->isGuest) {
       
        $menuItems2[] = 
        ['options'=> ['class'=>['icon'=>'fa fa-pencil-square-o fa-lg']],
        'label' => 'Daftar', 
        'url' => ['/pendaftaran/index']
    ];
        $menuItems[] = 
        ['options'=> ['class'=>['icon'=>'fa fa-arrow-circle-o-right fa-lg']],
        'label' => 'Login', 
        'url' => ['keanggotaan/site/login']
    ];
    } else {
        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->NoAnggota . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    // echo Nav::widget([
    //     'options' => ['class' => 'navbar-nav'],
    //     'items' => $menuItems,

    // ]);

    ?>
</div>
<div class="c0l-lg-6">
    <?php
    
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right !important'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
</div>

<?php $this->beginBody() ?>

  <div class="wrapper" style="max-width :100%;margin-top:-19px;">
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
