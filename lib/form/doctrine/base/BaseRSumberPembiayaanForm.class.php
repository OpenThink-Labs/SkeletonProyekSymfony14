<?php

/**
 * RSumberPembiayaan form base class.
 *
 * @method RSumberPembiayaan getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRSumberPembiayaanForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'kode_sumber_pembiayaan' => new sfWidgetFormInputText(),
      'sumber_pembiayaan'      => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'kode_sumber_pembiayaan' => new sfValidatorInteger(),
      'sumber_pembiayaan'      => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('r_sumber_pembiayaan[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RSumberPembiayaan';
  }

}
