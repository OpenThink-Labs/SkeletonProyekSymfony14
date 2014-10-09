<?php

/**
 * RPekerjaan form base class.
 *
 * @method RPekerjaan getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRPekerjaanForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_pekerjaan' => new sfWidgetFormInputHidden(),
      'pekerjaan'      => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'kode_pekerjaan' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('kode_pekerjaan')), 'empty_value' => $this->getObject()->get('kode_pekerjaan'), 'required' => false)),
      'pekerjaan'      => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('r_pekerjaan[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RPekerjaan';
  }

}
