<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="<?= Url::base() ?>/images/favicon.ico" type="image/x-icon">
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Schedule', 'url' => ['/site/schedule']],
        ['label' => 'Discounts', 'url' => ['/site/discounts']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
        ['label' => 'Appointment', 'url' => ['/site/addfeedback']],
        ['label' => 'User data', 'url' => ['/site/userfeedbacks']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">    
    <div class="row1">
        <div class="col-lg-4" align="center">
            <h4>Follow Us</h4>

            <a href="https://www.instagram.com/">
                <img src="images/instagram.png" width="50" height="50">
            </a>
            <a href="https://uk-ua.facebook.com/">
                <img src="images/facebook.png" width="50" height="50">
            </a>
            <a href="https://twitter.com/">
                <img src="images/twitter.png" width="50" height="50">
            </a> 
        </div>

       <div class="col-lg-4" align="center">
        <p class="tab"></p>
            <h4>Download from</h4>

            <p><a href="https://www.apple.com/app-store/">
                <img src="images/apple_store.png" width="50" height="50"></a>App Store | &nbsp
            
            <a href="https://play.google.com/store/">
                <img src="images/google_play.png" width="50" height="50"></a>Goodle Play</p>
        </div>

        <div class="col-lg-4" align="center">
            <p class="tab"></p>
            <h4>Contacts</h4>

            <p><a href="#">
                <img src="images/email.png" width="50" height="50" title="movie.space@gmail.com"></a>E-mail | &nbsp
            
            <a href="#">
                <img src="images/phone.png" width="50" height="50" title="+380 xx xxxx xxxx"></a>Phone
        </div>

    </div>
<p>___________________________________________________________________________________________________________________________________________________________________________________________________________________</p>


    <div class="container">
        <p class="float-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="float-right">Elizabeth Podkaluk</p>
    </div>


<style>
.footer {
    background-color: #dedede;
    font-size: .9em;
    height: 205px;
}
h4{
    color: #707070;
}
.row1 {
    display: flex;
    flex-flow: row nowrap;
    align-items: center;
    align-content: center;
    justify-content: space-between;
}
</style>

</footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
