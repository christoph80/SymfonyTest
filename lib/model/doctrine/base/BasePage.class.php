<?php

/**
 * BasePage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property string $shortdesc
 * @property string $content
 * 
 * @method string getTitle()     Returns the current record's "title" value
 * @method string getShortdesc() Returns the current record's "shortdesc" value
 * @method string getContent()   Returns the current record's "content" value
 * @method Page   setTitle()     Sets the current record's "title" value
 * @method Page   setShortdesc() Sets the current record's "shortdesc" value
 * @method Page   setContent()   Sets the current record's "content" value
 * 
 * @package    HELLO_WORLD
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BasePage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('page');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '255',
             ));
        $this->hasColumn('shortdesc', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '255',
             ));
        $this->hasColumn('content', 'string', 2550, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '2550',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}