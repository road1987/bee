<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ArticleTag */

$this->title = '添加标签';
$this->params['breadcrumbs'][] = ['label' => 'Article Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content article-tag-create">

<?php  echo $this->render('../includes/_article-tabnav', ['this' => $this]); ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
