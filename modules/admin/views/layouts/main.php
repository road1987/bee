<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>" />   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!--<?php $this->head() ?>-->
    <link rel="stylesheet" type="text/css" href='/bee/web/css/ipt.css'/>
    <link rel="stylesheet" type="text/css" href='/bee/web/assets/admin/css/base.css'/>
</head>
<body>
<?php $this->beginBody() ?>
    <div id="header">
        <div id="header-content">
            <?= $this->render('../includes/_main-menu.php' , ['this'=>$this]); ?> 
        </div>
    </div>
    
    <div id="main">
        <div id="sidebar-left">
            <?= $this->render('../includes/_sub-menu.php' , ['this'=>$this]); ?>
        </div>
        <div id="mainContent">
            <?= $content ?>
        </div>
    </div>
  <div id="footer">
    &copy; BEE-TECH <?= date('Y') ?>
  </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
