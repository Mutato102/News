<?php

use yii\db\Migration;

/**
 * Class m200808_084619_faker_news
 */
class m200808_084619_faker_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $rows = [];
        for($i = 0; $i < 10; $i++){
            $faker = \Faker\Factory::create();
            $rows[] = [
                $faker->word,
                $faker->text(rand(10,20)),
                $faker->text(rand(1000,10000)),
                $faker->numerify($i+1),
                $faker->numberBetween(0,1),
                $faker->numberBetween(1,8),
            ];
        }
        $this->batchInsert('news',[
            'name',
            'info',
            'description',
            'image',
            'favorite',
            'id_city',
        ],$rows);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200808_084619_faker_news cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200808_084619_faker_news cannot be reverted.\n";

        return false;
    }
    */
}
