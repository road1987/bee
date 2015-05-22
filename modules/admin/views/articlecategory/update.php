<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ArticleCategory */

$this->title = '更新文章分类: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Article Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content article-category-update">

	<?php  echo $this->render('../includes/_article-tabnav', ['this' => $this]); ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
