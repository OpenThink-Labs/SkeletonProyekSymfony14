<?php

/**
 * RSumberInformasi filter form base class.
 *
 * @package    properti
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRSumberInformasiFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sumber_informasi'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'sumber_informasi'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('r_sumber_informasi_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RSumberInformasi';
  }

  public function getFields()
  {
    return array(
      'kode_sumber_informasi' => 'Number',
      'sumber_informasi'      => 'Text',
    );
  }
}
