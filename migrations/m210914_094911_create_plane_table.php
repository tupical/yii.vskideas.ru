<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%plane}}`.
 */
class m210914_094911_create_plane_table extends Migration
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
            '{{%plane}}',
            [
                'id'=> $this->primaryKey(11),
                'name'=> $this->string(255)->notNull(),
                'age'=> $this->tinyInteger(3)->unsigned()->notNull(),
                'serial'=> $this->integer(11)->notNull(),
                'aircraft_id'=> $this->integer(11)->notNull(),
                'airport_id'=> $this->integer(11)->notNull(),
                'airline_id'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('aircraft_id','{{%plane}}',['aircraft_id'],false);
        $this->createIndex('airport_id','{{%plane}}',['airport_id'],false);
        $this->createIndex('airline_id','{{%plane}}',['airline_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('aircraft_id', '{{%plane}}');
        $this->dropIndex('airport_id', '{{%plane}}');
        $this->dropIndex('airline_id', '{{%plane}}');
        $this->dropTable('{{%plane}}');
    }
}
