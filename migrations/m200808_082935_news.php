<?php

use yii\db\Migration;

/**
 * Class m200808_082935_news
 */
class m200808_082935_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'info' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'image' => $this->string()->notNull(),
            'favorite' => $this->smallInteger()->notNull(),
            'create_date' => $this->dateTime(),//
            'id_city' => $this->integer()->notNull(),
        ]);
      /*  $this->addForeignKey(
            'NewsKey',  // это "условное имя" ключа
            'News', // это название текущей таблицы
            'id', // это имя поля в текущей таблице, которое будет ключом
            'news_tags', // это имя таблицы, с которой хотим связаться
            'id_news', // это поле таблицы, с которым хотим связаться
            'CASCADE'
        );*/
        $this->addForeignKey(
            'CityKey',  // это "условное имя" ключа
            'News', // это название текущей таблицы
            'id_city', // это имя поля в текущей таблице, которое будет ключом
            'city', // это имя таблицы, с которой хотим связаться
            'id', // это поле таблицы, с которым хотим связаться
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200808_082935_news cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200808_082935_news cannot be reverted.\n";

        return false;
    }
    */
}
