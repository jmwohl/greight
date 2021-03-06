<?php

/**
 * sfWordnikRelatedWord form base class.
 *
 * @method sfWordnikRelatedWord getObject() Returns the current form's model object
 *
 * @package    greight
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasesfWordnikRelatedWordForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'sf_wordnik_word_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfWordnikWord'), 'add_empty' => true)),
      'text'               => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'sf_wordnik_word_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfWordnikWord'), 'required' => false)),
      'text'               => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_wordnik_related_word[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfWordnikRelatedWord';
  }

}
