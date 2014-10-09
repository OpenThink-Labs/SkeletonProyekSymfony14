<?php

/**
 * RStatusLantai form base class.
 *
 * @method RStatusLantai getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRStatusLantaiForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'kode_status_lantai' => new sfWidgetFormInputText(),
      'status_lantai'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'kode_status_lantai' => new sfValidatorInteger(),
      'status_lantai'      => new sfValidatorString(array('max_length' => 30)),
    ));

    $this->widgetSchema->setNameFormat('r_status_lantai[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RStatusLantai';
  }

}
