<?php

use yii\db\Migration;

/**
 * Class m200808_092727_faker_NT
 */
class m200808_092727_faker_NT extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $rows = [];
        for($i = 0; $i < 10; $i++){
            $faker = \Faker\Factory::create('ru_RU');
            $rows[] = [
                $faker->numberBetween(1,10),
                $faker->numberBetween(1,10),
            ];
        }
        $this->batchInsert('news_tags',[
            'id_news',
            'id_tags',
        ],$rows);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200808_092727_faker_NT cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200808_092727_faker_NT cannot be reverted.\n";

        return false;
    }
    */
}
