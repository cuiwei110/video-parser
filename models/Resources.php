<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%resources}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $title_selector
 * @property string $description_selector
 * @property string $embedded_url
 * @property string $example_url
 */
class Resources extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resources}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'title_selector', 'description_selector', 'embedded_url', 'example_url'], 'required'],
            [['embedded_url', 'example_url'], 'url'],
            [['name', 'title_selector', 'description_selector', 'embedded_url', 'example_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'title_selector' => 'Title Selector',
            'description_selector' => 'Description Selector',
            'embedded_url' => 'Embedded Url',
            'example_url' => 'Example Url',
        ];
    }

    /**
     * @inheritdoc
     * @return ResourcesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ResourcesQuery(get_called_class());
    }
}
