<?php

/**
 * Content form base class.
 *
 * @method Content getObject() Returns the current form's model object
 *
 * @package    HELLO_WORLD
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseContentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'name'          => new sfWidgetFormInputText(),
      'shortdesc'     => new sfWidgetFormInputText(),
      'longdesc'      => new sfWidgetFormTextarea(),
      'type'          => new sfWidgetFormInputText(),
      'link'          => new sfWidgetFormInputText(),
      'user_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
      'directive_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Directive'), 'add_empty' => false)),
      'fullaccess_id' => new sfWidgetFormInputText(),
      'prevaccess_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ranking'), 'add_empty' => true)),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'name'          => new sfValidatorString(array('max_length' => 255)),
      'shortdesc'     => new sfValidatorString(array('max_length' => 255)),
      'longdesc'      => new sfValidatorString(array('max_length' => 2550)),
      'type'          => new sfValidatorString(array('max_length' => 255)),
      'link'          => new sfValidatorString(array('max_length' => 255)),
      'user_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
      'directive_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Directive'))),
      'fullaccess_id' => new sfValidatorInteger(array('required' => false)),
      'prevaccess_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Ranking'), 'required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('content[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Content';
  }

}
