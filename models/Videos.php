<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%videos}}".
 *
 * @property integer $id
 * @property integer $resource_type
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $video_id
 *
 * @property Resources $resourceType
 */
class Videos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%videos}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resource_type'], 'integer'],
            [['title', 'description', 'image', 'video_id'], 'string', 'max' => 255],
            [['resource_type'], 'exist', 'skipOnError' => true, 'targetClass' => Resources::className(), 'targetAttribute' => ['resource_type' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'resource_type' => 'Resource Type',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'video_id' => 'Video ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResourceType()
    {
        return $this->hasOne(Resources::className(), ['id' => 'resource_type']);
    }

    /**
     * @inheritdoc
     * @return VideosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new VideosQuery(get_called_class());
    }
}
