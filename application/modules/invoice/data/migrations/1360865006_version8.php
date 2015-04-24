<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version8 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->dropForeignKey('invoice_invoice', 'invoice_invoice_user_id_user_user_id');
    }

    public function down()
    {
        $this->createForeignKey('invoice_invoice', 'invoice_invoice_user_id_user_user_id', array(
             'name' => 'invoice_invoice_user_id_user_user_id',
             'local' => 'user_id',
             'foreign' => 'id',
             'foreignTable' => 'user_user',
             ));
    }
}