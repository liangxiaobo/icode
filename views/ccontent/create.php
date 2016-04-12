<?php

use yii\helpers\Html;
use yii\web\JqueryAsset;
use yii\bootstrap\BootstrapAsset;


/* @var $this yii\web\View */
/* @var $model app\models\CodeContent */

$this->title = 'Create Code Content';
$this->params['breadcrumbs'][] = ['label' => 'Code Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

// echo Yii::$app->request->baseUrl;
$this->registerCssFile('@web/assets/highlight/styles/monokai-sublime.css');
$this->registerJsFile('@web/script/code_create.js',['depends'=>['yii\web\JqueryAsset']]);  
?>
<div class="code-content-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ctype_models' => $ctype_models,
    ]) ?>

</div>
<script type="text/javascript" src="<?php echo  Yii::$app->request->baseUrl;?>/assets/highlight/highlight_pack.js"></script>