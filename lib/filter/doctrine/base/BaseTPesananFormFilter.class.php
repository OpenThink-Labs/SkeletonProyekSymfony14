<?php

/**
 * TPesanan filter form base class.
 *
 * @package    properti
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTPesananFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'status_pesanan'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_unit'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_konsumen'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_sales'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tanggal_pesan'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'list_price'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'discount'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'harga_kontrak'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_sumber_info'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_pembiayaan'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_tujuan_pembelian' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_event'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tanggal_jatuh_tempo'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'status_pembayaran'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'status_pesanan'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kode_unit'             => new sfValidatorPass(array('required' => false)),
      'kode_konsumen'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kode_sales'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tanggal_pesan'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'list_price'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'discount'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'harga_kontrak'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kode_sumber_info'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kode_pembiayaan'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kode_tujuan_pembelian' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kode_event'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tanggal_jatuh_tempo'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'status_pembayaran'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('t_pesanan_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TPesanan';
  }

  public function getFields()
  {
    return array(
      'status_pesanan'        => 'Number',
      'kode_pesanan'          => 'Number',
      'kode_unit'             => 'Text',
      'kode_konsumen'         => 'Number',
      'kode_sales'            => 'Number',
      'tanggal_pesan'         => 'Date',
      'list_price'            => 'Number',
      'discount'              => 'Number',
      'harga_kontrak'         => 'Number',
      'kode_sumber_info'      => 'Number',
      'kode_pembiayaan'       => 'Number',
      'kode_tujuan_pembelian' => 'Number',
      'kode_event'            => 'Number',
      'tanggal_jatuh_tempo'   => 'Date',
      'status_pembayaran'     => 'Number',
    );
  }
}
