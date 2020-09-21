<?php

use yii\db\Migration;

/**
 * Class m200808_083049_news_tags
 */
class m200808_083049_news_tags extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news_tags}}', [
            'id_news' => $this->integer()->notNull(),
            'id_tags' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey(
            'TagsKey',  // это "условное имя" ключа
            'news_tags', // это название текущей таблицы
            'id_tags', // это имя поля в текущей таблице, которое будет ключом
            'tags', // это имя таблицы, с которой хотим связаться
            'id', // это поле таблицы, с которым хотим связаться
            'CASCADE'
        );
        $this->addForeignKey(
            'NewsKey',  // это "условное имя" ключа
            'news_tags', // это название текущей таблицы
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
        echo "m200808_083049_news_tags cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200808_083049_news_tags cannot be reverted.\n";

        return false;
    }
    */
}
