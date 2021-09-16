<?php

use yii\db\Migration;

/**
 * Class m210916_092934_create_city_relations
 */
class m210916_092934_create_city_relations extends Migration
{
    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_city_country',
            '{{%city}}','country',
            '{{%country}}','code',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_city_country', '{{%city}}');
    }
}
