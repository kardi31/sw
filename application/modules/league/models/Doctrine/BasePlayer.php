<?php

/**
 * League_Model_Doctrine_BasePlayer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $position
 * @property integer $team_id
 * @property integer $photo_id
 * @property League_Model_Doctrine_Team $Team
 * @property Doctrine_Collection $Bookings
 * @property Doctrine_Collection $Shooters
 * 
 * @package    Admi
 * @subpackage League
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class League_Model_Doctrine_BasePlayer extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('league_player');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'autoincrement' => true,
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('first_name', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('last_name', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('position', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('team_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('photo_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));

        $this->option('type', 'MyISAM');
        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('League_Model_Doctrine_Team as Team', array(
             'local' => 'team_id',
             'foreign' => 'id'));

        $this->hasMany('League_Model_Doctrine_Booking as Bookings', array(
             'local' => 'id',
             'foreign' => 'player_id'));

        $this->hasMany('League_Model_Doctrine_Shooter as Shooters', array(
             'local' => 'id',
             'foreign' => 'player_id'));
    }
}