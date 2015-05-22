<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ArticleTag */

$this->title = '更新标签: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Article Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content article-tag-update">

<?php  echo $this->render('../includes/_article-tabnav', ['this' => $this]); ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
