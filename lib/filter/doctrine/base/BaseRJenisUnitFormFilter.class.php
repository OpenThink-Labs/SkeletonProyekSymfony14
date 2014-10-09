<?php

/**
 * RJenisUnit filter form base class.
 *
 * @package    properti
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRJenisUnitFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'jenis_unit'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lebar_unit'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'jenis_unit'      => new sfValidatorPass(array('required' => false)),
      'lebar_unit'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('r_jenis_unit_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RJenisUnit';
  }

  public function getFields()
  {
    return array(
      'kode_jenis_unit' => 'Number',
      'jenis_unit'      => 'Text',
      'lebar_unit'      => 'Number',
    );
  }
}
