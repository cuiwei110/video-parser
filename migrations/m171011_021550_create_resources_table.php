<?php

use yii\db\Migration;

/**
 * Handles the creation of table `resources`.
 */
class m171011_021550_create_resources_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('resources', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'title_selector' => $this->string(),
            'description_selector' => $this->string(),
            'embedded_url' => $this->string(),
            'example_url' => $this->string(),
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('resources');
    }
}
