<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use app\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title)?></title>
    <?php $this->head()?>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-46276885-17', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>
    <?php $this->beginBody() ?>
        <!-- Preloader -->
        <div id="loader">
            <div class="centrize">
                <div class="v-center">
                    <div id="mask">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Preloader-->

        <?=\app\widgets\Header::widget()?>
        <?= $content ?>
        <?=\app\widgets\Footer::widget()?>
        <div id="search-modal">
            <div class="centrize">
                <div class="v-center">
                    <div class="container">
                        <div class="search-form">
                            <!-- Search Form-->
                            <form class="searchform">
                                <div class="input-group">
                                    <input class="form-control" type="search" data-required="required" name="s" placeholder="Search..." value=""><span class="input-group-btn"><button class="btn btn-color" type="submit"><span><i class="hc-search"></i></span>
                      </button>
                      </span>
                                </div>
                            </form>
                            <!-- End Search Form-->
                        </div>
                    </div>
                </div>
            </div>
            <a id="close-search-modal" href="#">
                <i class="hc-close"></i>
            </a>
        </div>
        <div class="go-top">
            <a href="#top">
                <i class="hc-angle-up"></i>
            </a>
        </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
