<?php

use yii\db\Migration;

class m171011_143347_seed_resource_table extends Migration
{
    public function safeUp()
    {

        $resource = new \app\models\Resources();
        $resource->name = 'Rutube';
        $resource->title_selector = '#id-title h1';
        $resource->description_selector = '.b-video__description div.hidden';
        $resource->embedded_url = 'https://rutube.ru/play/embed/';
        $resource->example_url = 'https://rutube.ru/video/bc007c6a5c599e6ac64e78047d034764/';
        $resource->image_selector = 'meta[property="og:image"]';
        $resource->save();

        $resource = new \app\models\Resources();
        $resource->name = 'Vimeo';
        $resource->title_selector = '.iris_grid-content .clip_info-header';
        $resource->description_selector = '.clip_details-description.description-wrapper.iris_desc';
        $resource->embedded_url = 'https://player.vimeo.com/video/';
        $resource->example_url = 'https://vimeo.com/232897265';
        $resource->image_selector = 'meta[property="og:image"]';
        $resource->save();

    }

    public function safeDown()
    {
        \app\models\Resources::deleteAll();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171011_143347_seed_resource_table cannot be reverted.\n";

        return false;
    }
    */
}
