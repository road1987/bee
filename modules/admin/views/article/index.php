<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章列表';
$this->params['breadcrumbs'][] = $this->title;
$controlId = $this->context->id;
?>
<div class="content">
    <?php  echo $this->render('../includes/_article-tabnav', ['this' => $this]); ?>

    <!-- main category -->
    <div class="box box-sm margin-sm">
        <strong class="bg-success text-info" style="display: inline-block">文章分类：</strong>
        <?php foreach ($articleCategorys as $category): ?>
            <a href="<?php echo Url::current(['mcate' => $category->id]); ?>">
                <?= $category->categoryname ?>
            </a>
        <?php endforeach; ?>
    </div>
    <!-- end of main category -->

    <!-- sub category -->
    <div class="box box-sm margin-sm">
        <strong class="bg-success text-info" style="display: inline-block">二级分类：</strong>
        <?php foreach ($articleCategorys as $category): ?>
            <a href="<?php echo Url::current(['mcate' => $category->id]); ?>">
                <?= $category->categoryname ?>
            </a>
        <?php endforeach; ?>
    </div>
    <!-- end of sub category -->

    <!-- tags -->
    <div class="box box-sm margin-sm">
        <strong class="bg-success text-info" style="display: inline-block">文章标签：</strong>
        <?php foreach ($articleTags as $tag): ?>
            <a href="<?php echo Url::current(['tag' => $tag->id]); ?>"> <?= $tag->tagname ?> </a>
        <?php endforeach; ?>
    </div>
    <!-- end of tags -->

    <div class="border-rounded padding-sm margin-sm" style="border:1px solid #EEEEEE;">
        <table class="table table-condensed table-hover ">
            <thead>
                <tr>
                    <th>文章标题</th>
                    <th>所属分类</th>
                    <th>标签</th>
                    <th>内容</th>
                    <th>添加日期</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataProvider->getModels() as $model): ?>
                <tr>
                    <td><?= Html::encode("$model->title")?></td>
                    <td><?= Html::encode("$model->title")?></td>
                    <td><?= Html::encode("$model->content")?></td>
                    <td><?= Html::encode("$model->create_date")?></td>
                    <td>2015-02-28</td>
                    <td>
                        <a href="<?=Url::toRoute([$controlId.'/update', 'id' => $model->id]);?>" title="Update" data-pjax="0">编缉</a>
                        &nbsp;&nbsp;
                        <a href="<?=Url::toRoute([$controlId.'/delete', 'id' => $model->id]);?>" title="Delete" data-confirm="确定删除记录【标题：<?=$model->title?>】?" data-method="post" data-pjax="0">删除</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="margin"><?= LinkPager::widget(['pagination' => $pagination , 
                    'class' => 'margin pagiantion-sm'
                ]) ?>
        </div>
    </div>



</div>
