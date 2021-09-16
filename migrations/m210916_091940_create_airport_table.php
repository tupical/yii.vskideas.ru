<?php

use yii\db\Schema;
use yii\db\Migration;

class m210916_091940_create_airport_table extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%airport}}',
            [
                'id'=> $this->primaryKey(11),
                'name'=> $this->string(255)->notNull(),
                'city_id'=> $this->integer(11)->notNull(),
                'iata'=> $this->char(3)->notNull(),
                'icao'=> $this->char(4)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('icao','{{%airport}}',['icao'],true);
        $this->createIndex('iata','{{%airport}}',['iata'],true);
        $this->createIndex('city_id','{{%airport}}',['city_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('icao', '{{%airport}}');
        $this->dropIndex('iata', '{{%airport}}');
        $this->dropIndex('city_id', '{{%airport}}');
        $this->dropTable('{{%airport}}');
    }
}