<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Car;
use app\models\Operator;
?>

<div class="operator-car-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'operator_id')->dropDownList(
        Operator::find()->select(['name', 'id'])->indexBy('id')->column(),
        ['prompt' => 'Выберите оператора']
    ) ?>

    <?= $form->field($model, 'car_id')->dropDownList(
        Car::find()->select(['name', 'id'])->indexBy('id')->column(),
        ['prompt' => 'Выберите технику']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success btn-sm']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
