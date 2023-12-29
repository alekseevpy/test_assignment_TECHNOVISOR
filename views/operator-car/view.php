<?php

use yii\helpers\Html;

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Права доступа', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operator-car-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактирование', ['update', 'id' => $model->id], ['class' => 'btn btn-secondary btn-sm']) ?>
        <?= Html::a('Удаление', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-sm',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить права?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <td><?= Html::encode($model->id) ?></td>
        </tr>
        <tr>
            <th>Оператор</th>
            <td><?= Html::encode($model->operator->name) ?></td>
        </tr>
        <tr>
            <th>Техника</th>
            <td><?= Html::encode($model->car->name) ?></td>
        </tr>
    </table>

</div>
