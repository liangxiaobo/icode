<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CodeType */

$this->title = 'Create Code Type';
$this->params['breadcrumbs'][] = ['label' => 'Code Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="code-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
