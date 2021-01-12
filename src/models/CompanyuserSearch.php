<?php

namespace Bakkaya1997\kullanici\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use vendor\modules\kullanici\models\Companyuser;

/**
 * CompanyuserSearch represents the model behind the search form of `vendor\modules\kullanici\models\Companyuser`.
 */
class CompanyuserSearch extends Companyuser
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'department_id', 'salary'], 'integer'],
            [['firstname', 'lastname', 'started_at', 'picture'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Companyuser::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'department_id' => $this->department_id,
            'started_at' => $this->started_at,
            'salary' => $this->salary,
        ]);

        $query->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'picture', $this->picture]);

        return $dataProvider;
    }
}

