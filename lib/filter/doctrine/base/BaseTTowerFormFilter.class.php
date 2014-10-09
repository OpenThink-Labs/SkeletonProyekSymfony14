<?php

/**
 * TTower filter form base class.
 *
 * @package    properti
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTTowerFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_proyek' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nama_tower'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'kode_proyek' => new sfValidatorPass(array('required' => false)),
      'nama_tower'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('t_tower_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TTower';
  }

  public function getFields()
  {
    return array(
      'kode_proyek' => 'Text',
      'kode_tower'  => 'Text',
      'nama_tower'  => 'Text',
    );
  }
}
