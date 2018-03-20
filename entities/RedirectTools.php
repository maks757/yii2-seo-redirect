<?php

namespace maks757\seoredirect\entities;

use Yii;

/**
 * This is the model class for table "redirect_tools".
 *
 * @property int $id
 * @property string $from
 * @property string $to
 * @property int $code
 */
class RedirectTools extends \yii\db\ActiveRecord
{

    public static $CODES = [
        '301' => '301 Moved Permanently',
        '302' => '302 Moved Temporarily',
    ];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'redirect_tools';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['from', 'to'], 'required'],
            [['from', 'to'], 'string'],
            [['code'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'from' => Yii::t('app', 'From'),
            'to' => Yii::t('app', 'To'),
            'code' => Yii::t('app', 'Code'),
        ];
    }
}
