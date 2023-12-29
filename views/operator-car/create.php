<?php

use yii\helpers\Html;

$this->title = 'Выдача прав доступа';
$this->params['breadcrumbs'][] = ['label' => 'Права доступа', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operator-car-create">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
