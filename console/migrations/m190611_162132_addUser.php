<?php

use yii\db\Migration;

/**
 * Class m190611_162132_addUser
 */
class m190611_162132_addUser extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert(\common\models\User::tableName(), [
            'username' => 'admin',
            'auth_key' => Yii::$app->security->generateRandomString(),
            'password_hash' => Yii::$app->security->generatePasswordHash('admin'),
            'email' => 'admin@email.ru',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete(\common\models\User::tableName());

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190611_162132_addUser cannot be reverted.\n";

        return false;
    }
    */
}
