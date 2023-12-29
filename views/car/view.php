<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Car $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Техника', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="car-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактирование', ['update', 'id' => $model->id], ['class' => 'btn btn-secondary btn-sm']) ?>
        <?= Html::a('Удаление', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-sm',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить позицию?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <table class="table table-striped table-hover">
        <tbody>
            <tr>
                <th>ID</th>
                <td><?= $model->id ?></td>
            </tr>
            <tr>
                <th>Наименование</th>
                <td><?= Html::encode($model->name) ?></td>
            </tr>
            <tr>
                <th>Права доступа</th>
                <td>
                    <?php
                    $operators = $model->getOperatorCars()->with('operator')->all();

                    if (!empty($operators)) {
                        foreach ($operators as $operator) {
                            echo Html::encode($operator->operator->name) . '<br>';
                        }
                    } else {
                        echo 'Нет доступных операторов';
                    }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
