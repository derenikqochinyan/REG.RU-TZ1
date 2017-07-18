<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user_individual`.
 */
class m170718_094042_create_user_individual_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user_individual', [
            'id' => $this->primaryKey(),
            'email' => $this->string(100),
            'password' => $this->string(255),
            'surname' => $this->string(100),
            'firstname' => $this->string(100),
            'lastname' => $this->string(100),
            'inn' => $this->string(20)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user_individual');
    }
}
