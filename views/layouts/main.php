<?php
/* @var $this \yii\web\View */
/* @var $content string */

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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <div>
                <img src="<?= Yii::getAlias('@web') ?>/imgs/header.png" class="img-responsive" alt="header" >
            </div>
            <?php
            NavBar::begin([
                'brandLabel' => '<span class="glyphicon glyphicon-user"></span> ศูนย์อนามัยที่ 9 นครราชสีมา',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse',
                ],
            ]);
            $regiter = [['label' => 'ลงทะเบียนครุภัณฑ์', 'url' => ['/comtype/create']],
            ];
            $report = [['label' => 'รายงาน1', 'url' => ['/first1/index']],
                ['label' => 'รายงานแสดงรายละเอียดคอม', 'url' => ['/com/selectdata', 'tid' => '']],
                ['label' => 'รายงานแสดงประเภทคอม', 'url' => ['/reportcomtype/']],
                ['label' => 'รายงานปัญหาคอมพิวเตอร์', 'url' => ['/reportcomsevice/']],
                ['label' => 'กราฟรายงานจำนวนคอมพิวเตอร์', 'url' => ['/chat/']]
            ];
            $setting = [['label' => 'สถานะคอมฯ', 'url' => ['/comstatus/index']],
                ['label' => 'ประเภทคอมฯ', 'url' => ['/comtype/']]
            ];
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'encodeLabels' => false,
                'items' => [
                    ['label' => '<span class="glyphicon glyphicon-home"></span> หน้าแรก', 'url' => ['/site/index']],
                    ['label' => '<span class="glyphicon glyphicon-pencil"></span> ลงทะเบียน', 'items' => $regiter],
                    ['label' => '<span class="glyphicon glyphicon-list-alt"></span> ระบบรายงาน', 'items' => $report],
                    ['label' => '<span class="glyphicon glyphicon-cog"></span> ตั้งค่าระบบ', 'items' => $setting],
                    Yii::$app->user->isGuest ? (
                            ['label' => '<span class="glyphicon glyphicon-lock"></span> Login', 'url' => ['/site/login']]
                            ) : (
                            '<li>'
                            . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                            . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link']
                            )
                            . Html::endForm()
                            . '</li>'
                            )
                ],
            ]);
            NavBar::end();
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
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
