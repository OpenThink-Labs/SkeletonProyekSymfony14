<?php

/**
 * RStatusUnit filter form base class.
 *
 * @package    properti
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRStatusUnitFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'status_unit'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_warna'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'status_unit'      => new sfValidatorPass(array('required' => false)),
      'kode_warna'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('r_status_unit_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RStatusUnit';
  }

  public function getFields()
  {
    return array(
      'kode_status_unit' => 'Number',
      'status_unit'      => 'Text',
      'kode_warna'       => 'Text',
    );
  }
}
