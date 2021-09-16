<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%city}}`.
 */
class m210916_092927_create_city_table extends Migration
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
            '{{%city}}',
            [
                'id'=> $this->primaryKey(11),
                'name'=> $this->string(255)->notNull(),
                'country'=> $this->char(2)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('name','{{%city}}',['name','country'],true);
        $this->createIndex('city_ibfk_1','{{%city}}',['country'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('name', '{{%city}}');
        $this->dropIndex('city_ibfk_1', '{{%city}}');
        $this->dropTable('{{%city}}');
    }
}
