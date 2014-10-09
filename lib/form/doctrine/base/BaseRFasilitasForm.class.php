<?php

/**
 * RFasilitas form base class.
 *
 * @method RFasilitas getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRFasilitasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_fasilitas' => new sfWidgetFormInputHidden(),
      'fasilitas'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'kode_fasilitas' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('kode_fasilitas')), 'empty_value' => $this->getObject()->get('kode_fasilitas'), 'required' => false)),
      'fasilitas'      => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('r_fasilitas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RFasilitas';
  }

}
