<?php

use yii\db\Schema;
use yii\db\Migration;

class m210916_091953_create_airport_relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_airport_city_id',
            '{{%airport}}','city_id',
            '{{%city}}','id',
            'RESTRICT','RESTRICT'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_airport_city_id', '{{%airport}}');
    }
} 