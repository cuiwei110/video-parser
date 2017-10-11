<?php

use yii\db\Migration;

/**
 * Handles the creation of table `videos`.
 */
class m171011_023704_create_videos_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('videos', [
            'id' => $this->primaryKey(),
            'resource_type' => $this->integer(),
            'title' => $this->string(),
            'description' => $this->string(),
            'image' => $this->string(),
            'video_id' => $this->string()
        ]);

        $this->createIndex(
            'idx-videos-resource_type',
            '{{%videos}}',
            'resource_type'
        );

        $this->addForeignKey(
            "fk-videos-resource_type",
            "{{%videos}}",
            "resource_type",
            "{{%resources}}",
            "id",
            'RESTRICT');

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropIndex(
            'fk-videos-resource_type',
            '{{%videos}}'
        );
        $this->dropIndex(
            'idx-videos-resource_type',
            '{{%videos}}'
        );
        $this->dropTable('videos');
    }
}
