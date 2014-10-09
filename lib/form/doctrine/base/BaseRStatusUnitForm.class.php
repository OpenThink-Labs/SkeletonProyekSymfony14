<?php

/**
 * RStatusUnit form base class.
 *
 * @method RStatusUnit getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRStatusUnitForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_status_unit' => new sfWidgetFormInputHidden(),
      'status_unit'      => new sfWidgetFormInputText(),
      'kode_warna'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'kode_status_unit' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('kode_status_unit')), 'empty_value' => $this->getObject()->get('kode_status_unit'), 'required' => false)),
      'status_unit'      => new sfValidatorString(array('max_length' => 15)),
      'kode_warna'       => new sfValidatorString(array('max_length' => 6)),
    ));

    $this->widgetSchema->setNameFormat('r_status_unit[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RStatusUnit';
  }

}
