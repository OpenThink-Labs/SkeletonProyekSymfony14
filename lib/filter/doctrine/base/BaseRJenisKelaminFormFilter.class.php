<?php

/**
 * RJenisKelamin filter form base class.
 *
 * @package    properti
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRJenisKelaminFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_jenis_kelamin' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'jenis_kelamin'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'kode_jenis_kelamin' => new sfValidatorPass(array('required' => false)),
      'jenis_kelamin'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('r_jenis_kelamin_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RJenisKelamin';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'kode_jenis_kelamin' => 'Text',
      'jenis_kelamin'      => 'Text',
    );
  }
}
