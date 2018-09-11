<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);

// Meta tags
$this->registerMetaTag(['name' => 'author', 'content' => 'geknology.com']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Geknology Techno Services ✓ Soporte Técnico ; Desarrollo Web ; Diseño Digital ; Redes | ¡Llámanos ☎ (569) 6775 0215!']);
$this->registerMetaTag(['name' => 'keywords', 'content' => 'desarrollo web, diseño web, reparacion notebook, tecnico notebook, tecnico pc']);
$this->registerMetaTag(['rel' => 'canonical', 'href' => 'https://www.geknology.com']);

$this->registerMetaTag([
    'property' => 'og:url',
    'content' => Url::to(['/site/index'], true)
]);

$this->registerMetaTag([
    'property' => 'og:type',
    'content' => 'website'
]);

$this->registerMetaTag([
    'property' => 'og:title',
    'content' => 'Geknology Techno Services'
]);

$this->registerMetaTag([
    'property' => 'og:description',
    'content' => 'Geknology Techno Services ✓ Soporte Técnico ; Desarrollo Web ; Diseño Digital ; Redes | ¡Llámanos ☎ (569) 6775 0215!'
]);

$this->registerMetaTag([
    'property' => 'og:image',
    'content' => Url::to(['/images/logo/logo.png'], true)
]);

$this->registerMetaTag([
    'property' => 'og:image:alt',
    'content' => 'Geknology Techno Services'
]);

$this->registerMetaTag([
    'property' => 'twitter:card',
    'content' => 'summary'
]);

$this->registerMetaTag([
    'property' => 'twitter:description',
    'content' => 'Geknology Techno Services ✓ Soporte Técnico ; Desarrollo Web ; Diseño Digital ; Redes | ¡Llámanos ☎ (569) 6775 0215!'
]);

$this->registerMetaTag([
    'property' => 'twitter:title',
    'content' => 'Geknology Techno Services'
]);

// Favicon
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '196x196', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-196x196.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '96x96', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-96x96.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '32x32', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-32x32.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '16x16', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-16x16.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '128x128', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-128.png']);

$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '57x57', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-57x57.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '114x114', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-114x114.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '72x72', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-72x72.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '144x144', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-144x144.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '60x60', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-60x60.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '120x120', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-120x120.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '76x76', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-76x76.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '152x152', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-152x152.png']);

$this->registerMetaTag(['name' => 'application-name', 'content' => 'Geknology Techno Services']);
$this->registerMetaTag(['name' => 'msapplication-TileColor', 'content' => '#FFFFFF']);
$this->registerMetaTag(['name' => 'msapplication-TileImage', 'content' => './images/favicon/mstile-144x144.png']);
$this->registerMetaTag(['name' => 'msapplication-square70x70logo', 'content' => './images/favicon/mstile-70x70.png']);
$this->registerMetaTag(['name' => 'msapplication-square150x150logo', 'content' => './images/favicon/mstile-150x150.png']);
$this->registerMetaTag(['name' => 'msapplication-wide310x150logo', 'content' => './images/favicon/mstile-310x150.png']);
$this->registerMetaTag(['name' => 'msapplication-square310x310logo', 'content' => './images/favicon/mstile-310x310.png']);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="page-content">
  <header class="navigation transparent">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img(Yii::getAlias('@web') . '/images/logo/logo.png'),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'main-nav nav-highlight sticky',
        ],
    ]);
    $menuItems = [
        ['label' => 'Inicio', 'url' => ['/site/index']],
        ['label' => 'Quienes Somos', 'url' => ['/site/about']],
        ['label' => 'Soporte Técnico', 'url' => ['/site/contact']],
        ['label' => 'Desarrollo Web', 'url' => ['/site/contact']],
        ['label' => 'Portafolio', 'url' => ['/site/contact']],
        ['label' => 'Contacto', 'url' => ['/site/contact']],
        ['label' => 'Califícanos', 'url' => 'https://goo.gl/YWpQ3V'],
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
  </header>

  <?= Alert::widget() ?>
  <?= $content ?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
