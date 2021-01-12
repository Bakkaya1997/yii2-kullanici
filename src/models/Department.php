<?php

namespace Bakkaya1997\kullanici\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property Companyuser[] $companyusers
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
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
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Companyusers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyusers()
    {
        return $this->hasMany(Companyuser::className(), ['department_id' => 'id']);
    }
}

