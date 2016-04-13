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
<style type="text/css">
    pre {
        display: block;
        padding: 0px!important;
        margin: 0!important;
        color: inherit!important;
        font-size: inherit;!important;
        /*font: inherit!important;*/
        font: normal 9pt Consolas, Monaco, monospace!important;
        word-break: break-all;
        word-wrap: break-word;
        background-color: #23241f!important;
        border: 0 none!important;
        border-radius: 4px;

    }
    pre code{
        padding: 20px!important;
        margin: 0!important;
    }
</style>
<div class="code-content-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
