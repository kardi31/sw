<?php

/**
 * Invoice_Model_Doctrine_PaymentTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Invoice_Model_Doctrine_PaymentTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object Invoice_Model_Doctrine_PaymentTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Invoice_Model_Doctrine_Payment');
    }
}