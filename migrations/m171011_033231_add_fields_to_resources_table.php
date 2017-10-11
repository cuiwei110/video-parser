<?php

use yii\db\Migration;

class m171011_033231_add_fields_to_resources_table extends Migration
{
    public function safeUp()
    {
        $this->addColumn('resources', 'image_selector', $this->string());
        $this->addColumn('resources', 'id_parameter', $this->string());
    }

    public function safeDown()
    {
        $this->dropColumn('resources', 'image_selector');
        $this->dropColumn('resources', 'id_parameter');
    }
}
