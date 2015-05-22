<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->title = '更新文章: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content article-update">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->
	<?php  echo $this->render('../includes/_article-tabnav', ['this' => $this]); ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
