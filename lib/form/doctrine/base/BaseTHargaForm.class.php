<?php

/**
 * THarga form base class.
 *
 * @method THarga getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTHargaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'kode_proyek'   => new sfWidgetFormInputText(),
      'kode_tower'    => new sfWidgetFormInputText(),
      'type_unit'     => new sfWidgetFormInputText(),
      'harga_unit'    => new sfWidgetFormInputText(),
      'berlaku_mulai' => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'kode_proyek'   => new sfValidatorString(array('max_length' => 2)),
      'kode_tower'    => new sfValidatorString(array('max_length' => 1)),
      'type_unit'     => new sfValidatorInteger(),
      'harga_unit'    => new sfValidatorInteger(),
      'berlaku_mulai' => new sfValidatorDate(),
    ));

    $this->widgetSchema->setNameFormat('t_harga[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'THarga';
  }

}
