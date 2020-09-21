<?php

use yii\db\Migration;

/**
 * Class m200808_083738_faker_tags
 */
class m200808_083738_faker_tags extends Migration
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
                $faker->word,
            ];
        }
        $this->batchInsert('tags',['name'],$rows);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200808_083738_faker_tags cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200808_083738_faker_tags cannot be reverted.\n";

        return false;
    }
    */
}
