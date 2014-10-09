<?php

/**
 * RCaraBayar form base class.
 *
 * @method RCaraBayar getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRCaraBayarForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_cara_bayar' => new sfWidgetFormInputHidden(),
      'cara_bayar'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'kode_cara_bayar' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('kode_cara_bayar')), 'empty_value' => $this->getObject()->get('kode_cara_bayar'), 'required' => false)),
      'cara_bayar'      => new sfValidatorString(array('max_length' => 10)),
    ));

    $this->widgetSchema->setNameFormat('r_cara_bayar[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RCaraBayar';
  }

}
