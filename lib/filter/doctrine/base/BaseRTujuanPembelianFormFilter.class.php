<?php

/**
 * RTujuanPembelian filter form base class.
 *
 * @package    properti
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRTujuanPembelianFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_tujuan_pembelian' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tujuan_pembelian'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'kode_tujuan_pembelian' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tujuan_pembelian'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('r_tujuan_pembelian_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RTujuanPembelian';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'kode_tujuan_pembelian' => 'Number',
      'tujuan_pembelian'      => 'Text',
    );
  }
}
