<?php

/**
 * RStatusPesanan filter form base class.
 *
 * @package    properti
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRStatusPesananFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'status_pesanan'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'status_pesanan'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('r_status_pesanan_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RStatusPesanan';
  }

  public function getFields()
  {
    return array(
      'kode_status_pesanan' => 'Number',
      'status_pesanan'      => 'Text',
    );
  }
}
