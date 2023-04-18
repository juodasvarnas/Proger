<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="eg" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Название страницы</title>

    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<div class="wrap">
<div class="container">
    <ul class="nav nav-pills">
        <li role="presentation" class="active">
            <?= Html::a('Главная', '/web/',['class'=>'nav-link']) ?>
        </li>
        <li role="presentation">
            <?= Html::a('Статьи', ['post/test'],['class'=>'nav-link']) ?>
        </li>
        <li role="presentation">
            <?= Html::a('Статьи', ['post/show'],['class'=>'nav-link']) ?>
        </li>
        <li role="presentation">
            <?= Html::a('Админка', ['admin/user/index'],['class'=>'nav-link']) ?>
        </li>
    </ul>
    <?= $content ?>
</div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
