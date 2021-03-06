<?php

/**
 * Newsletter_Model_Doctrine_BaseSubscriber
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $username
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $token
 * @property boolean $active
 * @property Doctrine_Collection $Groups
 * @property Doctrine_Collection $SentMessages
 * 
 * @package    Admi
 * @subpackage Newsletter
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Newsletter_Model_Doctrine_BaseSubscriber extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('newsletter_subscriber');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'autoincrement' => true,
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('username', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('first_name', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('last_name', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('token', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('active', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));

        $this->option('type', 'MyISAM');
        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Newsletter_Model_Doctrine_Group as Groups', array(
             'refClass' => 'Newsletter_Model_Doctrine_GroupSubscriber',
             'local' => 'subscriber_id',
             'foreign' => 'group_id'));

        $this->hasMany('Newsletter_Model_Doctrine_SentMessage as SentMessages', array(
             'local' => 'id',
             'foreign' => 'subscriber_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $softdelete0 = new Doctrine_Template_SoftDelete();
        $this->actAs($timestampable0);
        $this->actAs($softdelete0);
    }
}