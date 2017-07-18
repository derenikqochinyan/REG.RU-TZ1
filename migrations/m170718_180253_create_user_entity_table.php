<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user_entity`.
 */
class m170718_180253_create_user_entity_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user_entity', [
            'id' => $this->primaryKey(),
            'email' => $this->string(100),
            'password' => $this->string(255),
            'surname' => $this->string(100),
            'firstname' => $this->string(100),
            'lastname' => $this->string(100),
            'organisation' => $this->string(255),
            'inn' => $this->string(20)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user_entity');
    }
}
