<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%car}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%provider}}`
 */
class m190204_180240_create_car_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('car', [
            'id' => $this->primaryKey(),
            'provider_id' => $this->integer()->notNull(),
            'name' => $this->string(),
            'power' => $this->integer()->notNull(),
            'max_speed' => $this->integer()->notNull(),
        ]);

        // creates index for column `provider_id`
        $this->createIndex(
            'idx-car-provider_id',
            'car',
            'provider_id'
        );

        // add foreign key for table `{{%provider}}`
        $this->addForeignKey(
            'fk-car-provider_id',
            'car',
            'provider_id',
            'provider',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%provider}}`
        $this->dropForeignKey(
            'fk-car-provider_id',
            'car'
        );

        // drops index for column `provider_id`
        $this->dropIndex(
            'idx-car-provider_id',
            'car'
        );

        $this->dropTable('car');
    }
}
