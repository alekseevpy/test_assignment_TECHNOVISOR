<?php
namespace app\models;

use Yii;

/**
 * This is the model class for table "operator_car".
 *
 * @property int $id
 * @property int $operator_id
 * @property int $car_id
 *
 * @property Cars $car
 * @property Operators $operator
 */
class OperatorCar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'operator_car';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['operator_id', 'car_id'], 'required'],
            [['operator_id', 'car_id'], 'integer'],
            [['operator_id'], 'exist', 'skipOnError' => true, 'targetClass' => Operator::class, 'targetAttribute' => ['operator_id' => 'id']],
            [['car_id'], 'exist', 'skipOnError' => true, 'targetClass' => Car::class, 'targetAttribute' => ['car_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'operator_id' => ' ',
            'car_id' => ' ',
        ];
    }

    /**
     * Gets query for [[Car]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCar()
    {
        return $this->hasOne(Car::class, ['id' => 'car_id']);
    }

    /**
     * Gets query for [[Operator]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperator()
    {
        return $this->hasOne(Operator::class, ['id' => 'operator_id']);
    }
}
