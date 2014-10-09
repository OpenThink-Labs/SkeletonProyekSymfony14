<?php

/**
 * TSales form base class.
 *
 * @method TSales getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTSalesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_sales'      => new sfWidgetFormInputHidden(),
      'nama_sales'      => new sfWidgetFormTextarea(),
      'kode_unit_sales' => new sfWidgetFormInputText(),
      'kode_atasan'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'kode_sales'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('kode_sales')), 'empty_value' => $this->getObject()->get('kode_sales'), 'required' => false)),
      'nama_sales'      => new sfValidatorString(),
      'kode_unit_sales' => new sfValidatorInteger(),
      'kode_atasan'     => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('t_sales[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TSales';
  }

}
