<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%aircraft}}`.
 */
class m210914_092517_create_aircraft_table extends Migration
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
            '{{%aircraft}}',
            [
                'id'=> $this->primaryKey(11),
                'name'=> $this->string(255)->notNull(),
                'description'=> $this->text()->notNull(),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%aircraft}}');
    }
}