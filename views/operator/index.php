<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Операторы';
?>
<div class="operator-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success btn-sm']) ?>
    </p>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Оператор</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataProvider->models as $model): ?>
                <tr>
                    <td><?= Html::encode($model->id) ?></td>
                    <td><?= Html::encode($model->name) ?></td>
                    <td>
                        <?= Html::a('Просмотр', ['view', 'id' => $model->id], ['class' => 'btn btn-secondary btn-sm']) ?>
                        <?= Html::a('Редактирование', ['update', 'id' => $model->id], ['class' => 'btn btn-secondary btn-sm']) ?>
                        <?= Html::a('Удаление', ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-danger btn-sm',
                            'data' => [
                                'confirm' => 'Вы уверены что хотите удалить оператора?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
