<?php

namespace barisakkaya\kullanici\models;

use Yii;

/**
 * This is the model class for table "companyuser".
 *
 * @property int $id
 * @property string|null $firstname
 * @property string|null $lastname
 * @property int|null $department_id
 * @property string|null $started_at
 * @property int|null $salary
 * @property string|null $picture
 *
 * @property Department $department
 */
class Companyuser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'companyuser';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_id', 'salary'], 'integer'],
            [['started_at'], 'safe'],
            [['picture'], 'file'],
            [['firstname', 'lastname', 'picture'], 'string', 'max' => 255],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'department_id' => 'Department ID',
            'started_at' => 'Started At',
            'salary' => 'Salary',
            'picture' => 'Picture',
        ];
    }

    /**
     * Gets query for [[Department]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }
}

