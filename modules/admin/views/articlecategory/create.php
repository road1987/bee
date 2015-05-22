<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ArticleCategory */

$this->title = '创建文章分类';
$this->params['breadcrumbs'][] = ['label' => 'Article Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content article-category-create">

	<?php  echo $this->render('../includes/_article-tabnav', ['this' => $this]); ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
