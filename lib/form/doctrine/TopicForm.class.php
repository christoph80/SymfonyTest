<?php

/**
 * Topic form.
 *
 * @package    HELLO_WORLD
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TopicForm extends BaseTopicForm
{
  public function configure()
  {

	$this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'title'        => new sfWidgetFormInputText(),
      'directive_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Directive'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'title'        => new sfValidatorString(array('max_length' => 255)),
      'directive_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Directive'))),
    ));

    $this->widgetSchema->setNameFormat('topic[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

  }

}
