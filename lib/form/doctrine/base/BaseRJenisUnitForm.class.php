<?php

/**
 * RJenisUnit form base class.
 *
 * @method RJenisUnit getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRJenisUnitForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_jenis_unit' => new sfWidgetFormInputHidden(),
      'jenis_unit'      => new sfWidgetFormTextarea(),
      'lebar_unit'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'kode_jenis_unit' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('kode_jenis_unit')), 'empty_value' => $this->getObject()->get('kode_jenis_unit'), 'required' => false)),
      'jenis_unit'      => new sfValidatorString(),
      'lebar_unit'      => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('r_jenis_unit[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RJenisUnit';
  }

}
