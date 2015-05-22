<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'hello';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::encode($msg) ?>