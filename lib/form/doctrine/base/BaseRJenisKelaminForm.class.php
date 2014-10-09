<?php

/**
 * RJenisKelamin form base class.
 *
 * @method RJenisKelamin getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRJenisKelaminForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'kode_jenis_kelamin' => new sfWidgetFormInputText(),
      'jenis_kelamin'      => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'kode_jenis_kelamin' => new sfValidatorString(array('max_length' => 1)),
      'jenis_kelamin'      => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('r_jenis_kelamin[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RJenisKelamin';
  }

}
