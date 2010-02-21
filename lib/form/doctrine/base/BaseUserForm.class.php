<?php

/**
 * User form base class.
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    HELLO_WORLD
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'username'     => new sfWidgetFormInputText(),
      'password'     => new sfWidgetFormInputText(),
      'regkey'       => new sfWidgetFormInputText(),
      'role'         => new sfWidgetFormInputText(),
      'directive_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Directive'), 'add_empty' => false)),
      'ranking_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ranking'), 'add_empty' => false)),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'username'     => new sfValidatorString(array('max_length' => 255)),
      'password'     => new sfValidatorString(array('max_length' => 255)),
      'regkey'       => new sfValidatorString(array('max_length' => 255)),
      'role'         => new sfValidatorString(array('max_length' => 255)),
      'directive_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Directive'))),
      'ranking_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Ranking'))),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'User', 'column' => array('username'))),
        new sfValidatorDoctrineUnique(array('model' => 'User', 'column' => array('regkey'))),
      ))
    );

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

}
