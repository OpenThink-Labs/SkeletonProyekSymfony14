<?php

/**
 * RKartuIdentitas form base class.
 *
 * @method RKartuIdentitas getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRKartuIdentitasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_kartu_identitas' => new sfWidgetFormInputHidden(),
      'kartu_identitas'      => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'kode_kartu_identitas' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('kode_kartu_identitas')), 'empty_value' => $this->getObject()->get('kode_kartu_identitas'), 'required' => false)),
      'kartu_identitas'      => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('r_kartu_identitas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RKartuIdentitas';
  }

}
