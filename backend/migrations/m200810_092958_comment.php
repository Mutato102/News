<?php

use yii\db\Migration;

/**
 * Class m200810_092958_comment
 */
class m200810_092958_comment extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comment}}', [
            'id' => $this->primaryKey(),
            'id_news' => $this->integer()->notNull(),
            'status' => "ENUM ('STATUS_DRAFT', 'STATUS_PUBLISHED')",
            'create_date'=>$this->dateTime(),
            'author'=>$this->string()->notNull(),
            'email'=>$this->string()->notNull(),
            'content'=>$this->text()->notNull(),
        ]);
        $this->addForeignKey(
            'CommentNews',  // это "условное имя" ключа
            'comment', // это название текущей таблицы
            'id_news', // это имя поля в текущей таблице, которое будет ключом
            'news', // это имя таблицы, с которой хотим связаться
            'id', // это поле таблицы, с которым хотим связаться
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200810_092958_comment cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200810_092958_comment cannot be reverted.\n";

        return false;
    }
    */
}
