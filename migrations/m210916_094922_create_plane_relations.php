<?php

use yii\db\Migration;

/**
 * Class m210916_094922_create_plane_relations
 */
class m210916_094922_create_plane_relations extends Migration
{
    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_plane_aircraft_id',
            '{{%plane}}','aircraft_id',
            '{{%aircraft}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_plane_airport_id',
            '{{%plane}}','airport_id',
            '{{%airport}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_plane_airline_id',
            '{{%plane}}','airline_id',
            '{{%airline}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_plane_aircraft_id', '{{%plane}}');
        $this->dropForeignKey('fk_plane_airport_id', '{{%plane}}');
        $this->dropForeignKey('fk_plane_airline_id', '{{%plane}}');
    }
}
