<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contact_message`.
 */
class m180515_102651_create_contact_message_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = '
        CREATE TABLE contact_message (
            id int unsigned not null auto_increment,
            name varchar(50) not null,
            email varchar(255) not null,
            message text not null,
            created_at datetime default current_timestamp,
            updated_at datetime,
            primary key(id)
        ) ENGINE=InnoDB;';

        Yii::$app->db->createCommand($sql)->execute();


        /*$this->createTable('contact_message', [
            'id' => $this->primaryKey(),
        ]);*/
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contact_message');
    }
}
