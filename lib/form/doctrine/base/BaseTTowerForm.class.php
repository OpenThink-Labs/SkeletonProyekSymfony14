<?php

/**
 * TTower form base class.
 *
 * @method TTower getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTTowerForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_proyek' => new sfWidgetFormInputText(),
      'kode_tower'  => new sfWidgetFormInputHidden(),
      'nama_tower'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'kode_proyek' => new sfValidatorString(array('max_length' => 2)),
      'kode_tower'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('kode_tower')), 'empty_value' => $this->getObject()->get('kode_tower'), 'required' => false)),
      'nama_tower'  => new sfValidatorString(array('max_length' => 15)),
    ));

    $this->widgetSchema->setNameFormat('t_tower[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TTower';
  }

}
