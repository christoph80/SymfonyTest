<?php

/**
 * Content filter form base class.
 *
 * @package    OpenBRD
 * @subpackage filter
 * @author     Ralph B. Magnus
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
      'type'          => new sfWidgetFormChoice(array('choices' => array('' => '', 'video' => 'video', 'audio' => 'audio', 'document' => 'document'))),
      'full_content'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prev_content'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'thmb_content'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'directive_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Directive'), 'add_empty' => true)),
      'fullaccess_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FullAccess'), 'add_empty' => true)),
      'prevaccess_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PrevAccess'), 'add_empty' => true)),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'          => new sfValidatorPass(array('required' => false)),
      'shortdesc'     => new sfValidatorPass(array('required' => false)),
      'longdesc'      => new sfValidatorPass(array('required' => false)),
      'type'          => new sfValidatorChoice(array('required' => false, 'choices' => array('video' => 'video', 'audio' => 'audio', 'document' => 'document'))),
      'full_content'  => new sfValidatorPass(array('required' => false)),
      'prev_content'  => new sfValidatorPass(array('required' => false)),
      'thmb_content'  => new sfValidatorPass(array('required' => false)),
      'user_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'directive_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Directive'), 'column' => 'id')),
      'fullaccess_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('FullAccess'), 'column' => 'id')),
      'prevaccess_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PrevAccess'), 'column' => 'id')),
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
      'type'          => 'Enum',
      'full_content'  => 'Text',
      'prev_content'  => 'Text',
      'thmb_content'  => 'Text',
      'user_id'       => 'ForeignKey',
      'directive_id'  => 'ForeignKey',
      'fullaccess_id' => 'ForeignKey',
      'prevaccess_id' => 'ForeignKey',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
