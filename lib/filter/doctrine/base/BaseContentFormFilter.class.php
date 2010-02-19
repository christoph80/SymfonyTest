<?php

/**
 * Content filter form base class.
 *
 * @package    HELLO_WORLD
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseContentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'shortdesc'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'longdesc'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'type'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'link'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'directive_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Directive'), 'add_empty' => true)),
      'fullaccess_id' => new sfWidgetFormFilterInput(),
      'prevaccess_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ranking'), 'add_empty' => true)),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'          => new sfValidatorPass(array('required' => false)),
      'shortdesc'     => new sfValidatorPass(array('required' => false)),
      'longdesc'      => new sfValidatorPass(array('required' => false)),
      'type'          => new sfValidatorPass(array('required' => false)),
      'link'          => new sfValidatorPass(array('required' => false)),
      'user_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'directive_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Directive'), 'column' => 'id')),
      'fullaccess_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'prevaccess_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Ranking'), 'column' => 'id')),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('content_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Content';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'name'          => 'Text',
      'shortdesc'     => 'Text',
      'longdesc'      => 'Text',
      'type'          => 'Text',
      'link'          => 'Text',
      'user_id'       => 'ForeignKey',
      'directive_id'  => 'ForeignKey',
      'fullaccess_id' => 'Number',
      'prevaccess_id' => 'ForeignKey',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
