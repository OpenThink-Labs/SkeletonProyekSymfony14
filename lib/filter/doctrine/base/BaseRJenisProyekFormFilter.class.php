<?php

/**
 * RJenisProyek filter form base class.
 *
 * @package    properti
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRJenisProyekFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'jenis_proyek'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'jenis_proyek'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('r_jenis_proyek_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RJenisProyek';
  }

  public function getFields()
  {
    return array(
      'kode_jenis_proyek' => 'Number',
      'jenis_proyek'      => 'Text',
    );
  }
}
