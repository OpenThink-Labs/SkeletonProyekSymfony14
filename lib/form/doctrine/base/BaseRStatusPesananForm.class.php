<?php

/**
 * RStatusPesanan form base class.
 *
 * @method RStatusPesanan getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRStatusPesananForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_status_pesanan' => new sfWidgetFormInputHidden(),
      'status_pesanan'      => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'kode_status_pesanan' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('kode_status_pesanan')), 'empty_value' => $this->getObject()->get('kode_status_pesanan'), 'required' => false)),
      'status_pesanan'      => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('r_status_pesanan[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RStatusPesanan';
  }

}
