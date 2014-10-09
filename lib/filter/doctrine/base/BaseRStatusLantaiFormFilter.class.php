<?php

/**
 * RStatusLantai filter form base class.
 *
 * @package    properti
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRStatusLantaiFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_status_lantai' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status_lantai'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'kode_status_lantai' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status_lantai'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('r_status_lantai_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RStatusLantai';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'kode_status_lantai' => 'Number',
      'status_lantai'      => 'Text',
    );
  }
}
