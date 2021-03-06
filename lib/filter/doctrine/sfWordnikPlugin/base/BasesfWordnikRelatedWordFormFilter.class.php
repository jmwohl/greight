<?php

/**
 * sfWordnikRelatedWord filter form base class.
 *
 * @package    greight
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasesfWordnikRelatedWordFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sf_wordnik_word_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfWordnikWord'), 'add_empty' => true)),
      'text'               => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'sf_wordnik_word_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfWordnikWord'), 'column' => 'id')),
      'text'               => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_wordnik_related_word_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfWordnikRelatedWord';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'sf_wordnik_word_id' => 'ForeignKey',
      'text'               => 'Text',
    );
  }
}
