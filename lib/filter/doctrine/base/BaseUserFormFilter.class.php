<?php

/**
 * User filter form base class.
 *
 * @package    OpenBRD
 * @subpackage filter
 * @author     Ralph B. Magnus
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'username'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'regkey'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'role'         => new sfWidgetFormChoice(array('choices' => array('' => '', 'administrator' => 'administrator', 'moderator' => 'moderator', 'user' => 'user'))),
      'directive_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Directive'), 'add_empty' => true)),
      'ranking_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ranking'), 'add_empty' => true)),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'username'     => new sfValidatorPass(array('required' => false)),
      'password'     => new sfValidatorPass(array('required' => false)),
      'regkey'       => new sfValidatorPass(array('required' => false)),
      'role'         => new sfValidatorChoice(array('required' => false, 'choices' => array('administrator' => 'administrator', 'moderator' => 'moderator', 'user' => 'user'))),
      'directive_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Directive'), 'column' => 'id')),
      'ranking_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Ranking'), 'column' => 'id')),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'username'     => 'Text',
      'password'     => 'Text',
      'regkey'       => 'Text',
      'role'         => 'Enum',
      'directive_id' => 'ForeignKey',
      'ranking_id'   => 'ForeignKey',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
    );
  }
}
