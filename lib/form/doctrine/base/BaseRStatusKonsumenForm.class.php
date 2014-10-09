<?php

/**
 * RStatusKonsumen form base class.
 *
 * @method RStatusKonsumen getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRStatusKonsumenForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_status_konsumen' => new sfWidgetFormInputHidden(),
      'status_konsumen'      => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'kode_status_konsumen' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('kode_status_konsumen')), 'empty_value' => $this->getObject()->get('kode_status_konsumen'), 'required' => false)),
      'status_konsumen'      => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('r_status_konsumen[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RStatusKonsumen';
  }

}
