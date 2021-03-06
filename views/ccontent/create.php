<?php

use yii\helpers\Html;
use yii\web\JqueryAsset;



/* @var $this yii\web\View */
/* @var $model app\models\CodeContent */

$this->title = 'Create Code Content';
$this->params['breadcrumbs'][] = ['label' => 'Code Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
 
?>
<div class="code-content-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ctype_models' => $ctype_models,
    ]) ?>

</div>