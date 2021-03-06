<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version11 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->dropTable('product_product_comment');
        $this->addColumn('product_comment', 'moderation', 'boolean', '25', array(
             'default' => '0',
             ));
    }

    public function down()
    {
        $this->createTable('product_product_comment', array(
             'product_id' => 
             array(
              'primary' => '1',
              'type' => 'integer',
              'length' => '4',
             ),
             'comment_id' => 
             array(
              'primary' => '1',
              'type' => 'integer',
              'length' => '4',
             ),
             ), array(
             'type' => 'MyISAM',
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'product_id',
              1 => 'comment_id',
             ),
             'collate' => 'utf8_general_ci',
             'charset' => 'utf8',
             ));
        $this->removeColumn('product_comment', 'moderation');
    }
}