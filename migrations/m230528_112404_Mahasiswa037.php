<?php

use yii\db\Migration;

/**
 * Class m230528_112404_Mahasiswa037
 */
class m230528_112404_Mahasiswa037 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{Mahasiswa37}}', [
            'id037' => $this->primaryKey(),
            'nim037' => $this->string(25)->notNull()->unique(),
            'nama037' => $this->string(225)->notNull(),
            'kelas037' => $this->string(10)->notNull(),
            'status037' => $this->string(50)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230528_112404_Mahasiswa037 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230528_112404_Mahasiswa037 cannot be reverted.\n";

        return false;
    }
    */
}
