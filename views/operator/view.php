<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Operator $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Операторы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="operator-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактирование', ['update', 'id' => $model->id], ['class' => 'btn btn-secondary btn-sm']) ?>
        <?= Html::a('Удаление', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-sm',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить оператора?',
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
            <td><?= Html::encode($model->name) ?></td>
        </tr>
        <tr>
            <th>Доступная техника</th>
            <td>
                <?php
                $cars = $model->getOperatorCars()->with('car')->all();

                if (!empty($cars)) {
                    foreach ($cars as $car) {
                        echo Html::encode($car->car->name) . '<br>';
                    }
                } else {
                    echo 'Нет доступной техники';
                }
                ?>
            </td>
        </tr>
    </table>
</div>
