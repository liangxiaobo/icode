<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CodeContent */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Code Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$this->registerCssFile('@web/assets/highlight/styles/monokai-sublime.css', ['depends' => ['yii\bootstrap\BootstrapAsset']]);
$this->registerJsFile('@web/script/code_block.js',['depends'=>['yii\web\JqueryAsset']]); 
?>
<div class="code-content-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
<?php echo $model->content; ?>
    <!-- DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'code_type',
            'title',
            'content:ntext',
        ],
    ]) -->

</div>
<script type="text/javascript" src="<?php echo  Yii::$app->request->baseUrl;?>/assets/highlight/highlight_pack.js"></script>
