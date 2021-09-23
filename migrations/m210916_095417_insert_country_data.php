<?php

use yii\db\Migration;

/**
 * Class m210916_095417_insert_country_data
 */
class m210916_095417_insert_country_data extends Migration
{
    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%country}}',
                           ["code", "name"],
                            [
    [
        'code' => 'AU',
        'name' => 'Australia',
    ],
    [
        'code' => 'BR',
        'name' => 'Brazil',
    ],
    [
        'code' => 'CA',
        'name' => 'Canada',
    ],
    [
        'code' => 'CN',
        'name' => 'China',
    ],
    [
        'code' => 'DE',
        'name' => 'Germany',
    ],
    [
        'code' => 'FR',
        'name' => 'France',
    ],
    [
        'code' => 'GB',
        'name' => 'United Kingdom',
    ],
    [
        'code' => 'IN',
        'name' => 'India',
    ],
    [
        'code' => 'RU',
        'name' => 'Russia',
    ],
    [
        'code' => 'US',
        'name' => 'United States',
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%country}} CASCADE');
    }
}
