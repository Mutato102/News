<?php

use yii\db\Migration;

/**
 * Class m200808_084009_faker_city
 */
class m200808_084009_faker_city extends Migration
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
                $faker->city(),
            ];
        }
        $this->batchInsert('city',[
            'name',
        ],$rows);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200808_084009_faker_city cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200808_084009_faker_city cannot be reverted.\n";

        return false;
    }
    */
}
