<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\CodeContent */
/* @var $form yii\widgets\ActiveForm */

$this->registerCssFile('@web/assets/highlight/styles/monokai-sublime.css'); 
$this->registerJsFile('@web/script/code_create.js',['depends'=>['yii\web\JqueryAsset']]);
?>

<div class="code-content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code_type')->dropDownList(ArrayHelper::map($ctype_models, 'id', 'name')) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script type="text/javascript" src="<?php echo  Yii::$app->request->baseUrl;?>/assets/highlight/highlight_pack.js"></script>