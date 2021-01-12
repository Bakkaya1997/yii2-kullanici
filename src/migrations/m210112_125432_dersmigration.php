<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210112_125432_dersmigration
 */
class m210112_125432_dersmigration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('companyuser', [
            'id' => Schema::TYPE_PK,
            // $this->primaryKey()
            'firstname' => Schema::TYPE_STRING,
            'lastname' => Schema::TYPE_STRING,
            'department_id' => Schema::TYPE_INTEGER,
            // $this->string(255) // String with 255 characters
            'started_at' => Schema::TYPE_DATE,
            'salary' => Schema::TYPE_INTEGER,
            // $this->integer()
            'picture' => Schema::TYPE_STRING
         
        ]);

        $this->createTable('department', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING
        ]);
        
        $this->createIndex(
            'idx-company-department_id',
            'companyuser',
            'department_id'
        );


        $this->addForeignKey(
            'fk-company-department',
            'companyuser',
            'department_id',
            'department',
            'id',
            'CASCADE'
        );
     
    }

    /**
     * {@inheritdoc}
     */

    public function safeDown()
    {
        $this->dropTable('companyuser');
        $this->dropTable('department');
        
    }

}

