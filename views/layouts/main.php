<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
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
<link id="callCss" rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />
<link id="callCss" rel="stylesheet" href="/css/style.css" type="text/css" media="screen" charset="utf-8" />
<div class="wrap">
    <div id="headerSection">
        <div class="container">

            <div class="span3 logo">
                <a href="#"><img src="/img/logo1.png" alt="" /></a>
            </div>

            <div class="navbar">
                <button class="pull-right ddbtn" id="toggle-btn"><img src="/img/drop-down.png"></button>
                <div id="menu" class="nav-collapse">
                    <ul class="nav mynav">
                        <li><a href="/accounts">Искать</a></li>
                        <li><a href="#portfolioSection">Личный кабинет</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
