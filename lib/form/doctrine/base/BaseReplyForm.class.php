<?php

/**
 * Reply form base class.
 *
 * @method Reply getObject() Returns the current form's model object
 *
 * @package    OpenBRD
 * @subpackage form
 * @author     Ralph B. Magnus
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseReplyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'textbody'   => new sfWidgetFormTextarea(),
      'thread_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Thread'), 'add_empty' => true)),
      'user_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'textbody'   => new sfValidatorString(array('max_length' => 2550)),
      'thread_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Thread'), 'required' => false)),
      'user_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('reply[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reply';
  }

}
