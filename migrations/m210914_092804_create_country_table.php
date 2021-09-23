<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%country}}`.
 */
class m210914_092804_create_country_table extends Migration
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
            '{{%country}}',
            [
                'code'=> $this->char(2)->notNull(),
                'name'=> $this->char(52)->notNull(),
            ],$tableOptions
        );
        $this->addPrimaryKey('pk_on_country','{{%country}}',['code']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_country','{{%country}}');
        $this->dropTable('{{%country}}');
    }
}
