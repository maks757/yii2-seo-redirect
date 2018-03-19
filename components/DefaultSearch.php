<?php

namespace maks757\seoredirect\components;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use maks757\seoredirect\entities\RedirectTools;

/**
 * DefaultSearch represents the model behind the search form of `maks757\seoredirect\entities\RedirectTools`.
 */
class DefaultSearch extends RedirectTools
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'code'], 'integer'],
            [['from', 'to'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = RedirectTools::find();

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
            'code' => $this->code,
        ]);

        $query->andFilterWhere(['like', 'from', $this->from])
            ->andFilterWhere(['like', 'to', $this->to]);

        return $dataProvider;
    }
}
