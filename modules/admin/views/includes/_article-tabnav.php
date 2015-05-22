   <?php use yii\helpers\Html;

   	$controlId = $this->context->id;
   	$actionId = $this->context->action->id;
   ?>
   <div class="margin-sm">
      <strong class="text-lg"><?= Html::encode($this->title) ?></strong>
      <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
      <?= Html::a('文章列表', ['article/index'], ['class' => 'btn btn-sm ' . ($controlId=="article"&& $actionId=="index"?"btn-primary":"btn-default") ]) ?>
      <?= Html::a('添加文章', ['article/create'], ['class' => 'btn btn-sm ' . ($controlId=="article" && $actionId=="create"?"btn-primary":"btn-default") ]) ?>
      <?= Html::a('文章分类', ['articlecategory/index'], ['class' => 'btn btn-sm ' . ($controlId=="articlecategory"?"btn-primary":"btn-default") ]) ?>
      <?= Html::a('文章标签', ['articletag/index'], ['class' => 'btn btn-sm ' . ($controlId=="articletag"?"btn-primary":"btn-default") ]) ?>
   </div>