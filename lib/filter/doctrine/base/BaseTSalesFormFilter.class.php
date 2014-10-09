<?php

/**
 * TSales filter form base class.
 *
 * @package    properti
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTSalesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nama_sales'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_unit_sales' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_atasan'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nama_sales'      => new sfValidatorPass(array('required' => false)),
      'kode_unit_sales' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kode_atasan'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('t_sales_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TSales';
  }

  public function getFields()
  {
    return array(
      'kode_sales'      => 'Number',
      'nama_sales'      => 'Text',
      'kode_unit_sales' => 'Number',
      'kode_atasan'     => 'Number',
    );
  }
}
