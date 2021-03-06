<?php

/**
 * BaseRanking
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property integer $prio
 * @property string $icon
 * @property Doctrine_Collection $RankingUser
 * 
 * @method string              getName()        Returns the current record's "name" value
 * @method integer             getPrio()        Returns the current record's "prio" value
 * @method string              getIcon()        Returns the current record's "icon" value
 * @method Doctrine_Collection getRankingUser() Returns the current record's "RankingUser" collection
 * @method Ranking             setName()        Sets the current record's "name" value
 * @method Ranking             setPrio()        Sets the current record's "prio" value
 * @method Ranking             setIcon()        Sets the current record's "icon" value
 * @method Ranking             setRankingUser() Sets the current record's "RankingUser" collection
 * 
 * @package    OpenBRD
 * @subpackage model
 * @author     Ralph B. Magnus
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseRanking extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ranking');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => '255',
             ));
        $this->hasColumn('prio', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('icon', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => '255',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('User as RankingUser', array(
             'local' => 'id',
             'foreign' => 'ranking_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}