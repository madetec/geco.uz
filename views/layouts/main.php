<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/site.webmanifest">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#05005c">
    <meta name="msapplication-TileColor" content="#05005c">
    <meta name="theme-color" content="#ffffff">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="og:title" content="<?= Html::encode($this->title) ?>">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?php

/*
  ['/site/index']
  ['/site/about']
  ['/site/gallery']
  ['/services/termoplintus']
  ['/services/stroyka']
  ['/services/index']
  ['/news/index']
  ['/site/contact']
  ['/auth/login']
  ['/auth/logout']
 */

?>


<!-- Page Wrapper -->
<div id="page">
    <!-- Header -->
    <header class="header-v2">
        <div class="top-header">
            <div class="container-fluid">
                <ul class="contacts">
                    <li><a href="tel:+998951692626"><i class="fa fa-phone"></i>+998 (95) 169 26 26</li>
                    <li><a href="mailto:info@geco.uz"><i class="fa fa-envelope"></i>info@geco.uz</a></li>
                </ul>
                <?= \app\widgets\SocialWidgets::widget() ?>
            </div>
        </div>

        <div class="bottom-header">
            <div class="container-fluid">
            		<span class="mobile-navigation-toggle hidden-md hidden-lg">
						<span class="menui top-menu"></span>
						<span class="menui mid-menu"></span>
						<span class="menui bottom-menu"></span>
					</span>

                <div class="logo">
                    <a href="/">
                        <div class="cont">
                            <div class="element"></div>
                            <div class="element"></div>
                            <div class="element"></div>
                            <div class="element"></div>
                        </div>
                    </a>
                </div>

                <nav class="main-nav">
                    <ul class="menu">
                        <li class="menu-item menu-item-has-children current-menu-parent">
                            <a href="<?= Url::to(['/']) ?>">Главная</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Услуги</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="<?= Url::to(['services/thermoplint']) ?>">Термоплинтус</a>
                                </li>
                                <li class="menu-item">
                                    <a href="<?= Url::to(['services/ventilation']) ?>">Вентиляция</a>
                                </li>
                                <li class="menu-item">
                                    <a href="<?= Url::to(['services/turnkey']) ?>">Строительство под ключ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="<?= Url::to(['site/objects']) ?>">Объекты</a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="<?= Url::to(['news/index']) ?>">Новости</a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="<?= Url::to(['site/about']) ?>">О Нас</a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="<?= Url::to(['site/contact']) ?>">Контакты</a>
                        </li>
                    </ul>
                </nav>

                <ul class="actions">
                    <li class="custom-select">
                        <span class="default"><i class="fa fa-globe"></i><span class="content">RUS</span></span>
                        <ul class="select-options dismiss">
                            <li>RUS</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>
<?= $content; ?>
    <!-- Footer -->
    <footer>
        <div class="top-footer">
            <div class="container">
                <div class="row isotope">
                    <div class="col-md-6 col-sm-6 col-xs-12 isotope-item">
                        <div class="widget widget_contact">
                            <h4 class="widget-title">Контактная информация</h4>
                            <div class="widget-body">
                                <ul class="contact-info clean-list">
                                    <li>
                                        <span class="title">Адрес:</span>
                                        <p>4 Осиё, Юнусабадский район, Ташкент 100017 Узбекистан</p>
                                    </li>
                                    <li>
                                        <span class="title">Телефон:</span>
                                        <p>+99 (895) 169 26 26 - Офис</p>
                                    </li>
                                    <li>
                                        <span class="title">Email:</span>
                                        <p><a href="mailto:info@geco.uz">info@geco.uz</a></p>
                                    </li>
                                    <li>
                                        <span class="title">Мы есть:</span>
                                        <?= \app\widgets\SocialWidgets::widget(['classes' => ['clean-list']]) ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                <?= \app\widgets\NewsWidget::widget(['count' => 3,'profile' => 'footer']) ?>

                </div>
            </div>
        </div>

        <div class="bottom-footer">
            <div class="container">
                <p class="alignleft align-left copyright">
                    Copyright © 2019 GECO. All Rights Reserved.
                </p>

                <p class="alignright align-right copyright">
                    Разработано и поддерживается <a href="http://madetec.uz">Madetec Solution</a>
                </p>
            </div>
        </div>
    </footer>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
