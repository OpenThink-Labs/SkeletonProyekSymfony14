<?php

/**
 * TFasilitas form base class.
 *
 * @method TFasilitas getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTFasilitasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'kode_proyek'    => new sfWidgetFormInputText(),
      'kode_fasilitas' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'kode_proyek'    => new sfValidatorInteger(),
      'kode_fasilitas' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('t_fasilitas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TFasilitas';
  }

}
