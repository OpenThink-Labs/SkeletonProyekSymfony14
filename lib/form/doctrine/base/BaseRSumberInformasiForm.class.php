<?php

/**
 * RSumberInformasi form base class.
 *
 * @method RSumberInformasi getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRSumberInformasiForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_sumber_informasi' => new sfWidgetFormInputHidden(),
      'sumber_informasi'      => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'kode_sumber_informasi' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('kode_sumber_informasi')), 'empty_value' => $this->getObject()->get('kode_sumber_informasi'), 'required' => false)),
      'sumber_informasi'      => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('r_sumber_informasi[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RSumberInformasi';
  }

}
