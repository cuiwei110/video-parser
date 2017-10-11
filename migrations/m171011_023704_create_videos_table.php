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
            'title' => $this->string(400),
            'description' => $this->string(1000),
            'image' => $this->string(),
            'video_id' => $this->string()
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');

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
        $this->dropForeignKey(
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
