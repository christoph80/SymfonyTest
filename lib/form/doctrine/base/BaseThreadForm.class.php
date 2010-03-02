<?php

/**
 * Thread form base class.
 *
 * @method Thread getObject() Returns the current form's model object
 *
 * @package    HELLO_WORLD
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseThreadForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'title'      => new sfWidgetFormInputText(),
      'content'    => new sfWidgetFormTextarea(),
      'content_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Content'), 'add_empty' => true)),
      'topic_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Topic'), 'add_empty' => true)),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'title'      => new sfValidatorString(array('max_length' => 255)),
      'content'    => new sfValidatorString(array('max_length' => 2550)),
      'content_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Content'), 'required' => false)),
      'topic_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Topic'), 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('thread[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Thread';
  }

}
