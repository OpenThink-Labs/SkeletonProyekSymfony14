<?php

/**
 * RJenisProyek form base class.
 *
 * @method RJenisProyek getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRJenisProyekForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_jenis_proyek' => new sfWidgetFormInputHidden(),
      'jenis_proyek'      => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'kode_jenis_proyek' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('kode_jenis_proyek')), 'empty_value' => $this->getObject()->get('kode_jenis_proyek'), 'required' => false)),
      'jenis_proyek'      => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('r_jenis_proyek[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RJenisProyek';
  }

}
