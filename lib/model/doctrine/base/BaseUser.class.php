<?php

/**
 * BaseUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $directive_id
 * @property string $username
 * @property string $password
 * @property string $regkey
 * @property string $role
 * @property integer $ranking_id
 * @property Directive $Directive
 * @property Ranking $Ranking
 * @property Doctrine_Collection $UserContent
 * 
 * @method integer             getDirectiveId()  Returns the current record's "directive_id" value
 * @method string              getUsername()     Returns the current record's "username" value
 * @method string              getPassword()     Returns the current record's "password" value
 * @method string              getRegkey()       Returns the current record's "regkey" value
 * @method string              getRole()         Returns the current record's "role" value
 * @method integer             getRankingId()    Returns the current record's "ranking_id" value
 * @method Directive           getDirective()    Returns the current record's "Directive" value
 * @method Ranking             getRanking()      Returns the current record's "Ranking" value
 * @method Doctrine_Collection getUserContent()  Returns the current record's "UserContent" collection
 * @method User                setDirectiveId()  Sets the current record's "directive_id" value
 * @method User                setUsername()     Sets the current record's "username" value
 * @method User                setPassword()     Sets the current record's "password" value
 * @method User                setRegkey()       Sets the current record's "regkey" value
 * @method User                setRole()         Sets the current record's "role" value
 * @method User                setRankingId()    Sets the current record's "ranking_id" value
 * @method User                setDirective()    Sets the current record's "Directive" value
 * @method User                setRanking()      Sets the current record's "Ranking" value
 * @method User                setUserContent()  Sets the current record's "UserContent" collection
 * 
 * @package    HELLO_WORLD
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user');
        $this->hasColumn('directive_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('username', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => '255',
             ));
        $this->hasColumn('password', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '255',
             ));
        $this->hasColumn('regkey', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => '255',
             ));
        $this->hasColumn('role', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '255',
             ));
        $this->hasColumn('ranking_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Directive', array(
             'local' => 'directive_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Ranking', array(
             'local' => 'ranking_id',
             'foreign' => 'id'));

        $this->hasMany('Content as UserContent', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}