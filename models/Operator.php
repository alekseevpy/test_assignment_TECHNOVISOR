<?php
namespace app\models;

use Yii;

/**
 * This is the model class for table "operators".
 *
 * @property int $id
 * @property string $name
 *
 * @property OperatorCar[] $operatorCars
 */
class Operator extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'operators';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование',
        ];
    }

    /**
     * Gets query for [[OperatorCars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperatorCars()
    {
        return $this->hasMany(OperatorCar::class, ['operator_id' => 'id']);
    }
}
