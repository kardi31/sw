<?php

/**
 * Newsletter_Model_Doctrine_GroupSubscriberTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Newsletter_Model_Doctrine_GroupSubscriberTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object Newsletter_Model_Doctrine_GroupSubscriberTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Newsletter_Model_Doctrine_GroupSubscriber');
    }
}