<?php

/**
 * Topic form base class.
 *
 * @method Topic getObject() Returns the current form's model object
 *
 * @package    HELLO_WORLD
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTopicForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'title'        => new sfWidgetFormInputText(),
      'directive_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Directive'), 'add_empty' => false)),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'title'        => new sfValidatorString(array('max_length' => 255)),
      'directive_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Directive'))),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('topic[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Topic';
  }

}
