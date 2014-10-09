<?php

/**
 * RSumberPembiayaan filter form base class.
 *
 * @package    properti
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRSumberPembiayaanFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_sumber_pembiayaan' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sumber_pembiayaan'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'kode_sumber_pembiayaan' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sumber_pembiayaan'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('r_sumber_pembiayaan_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RSumberPembiayaan';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'kode_sumber_pembiayaan' => 'Number',
      'sumber_pembiayaan'      => 'Text',
    );
  }
}
