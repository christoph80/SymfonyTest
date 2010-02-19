<?php

/**
 * BaseTopic
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property integer $directive_id
 * @property Directive $Directive
 * @property Doctrine_Collection $TopicThread
 * 
 * @method string              getTitle()        Returns the current record's "title" value
 * @method integer             getDirectiveId()  Returns the current record's "directive_id" value
 * @method Directive           getDirective()    Returns the current record's "Directive" value
 * @method Doctrine_Collection getTopicThread()  Returns the current record's "TopicThread" collection
 * @method Topic               setTitle()        Sets the current record's "title" value
 * @method Topic               setDirectiveId()  Sets the current record's "directive_id" value
 * @method Topic               setDirective()    Sets the current record's "Directive" value
 * @method Topic               setTopicThread()  Sets the current record's "TopicThread" collection
 * 
 * @package    HELLO_WORLD
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseTopic extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('topic');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '255',
             ));
        $this->hasColumn('directive_id', 'integer', null, array(
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

        $this->hasMany('Thread as TopicThread', array(
             'local' => 'id',
             'foreign' => 'topic_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}