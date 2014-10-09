<?php

/**
 * TPembayaran filter form base class.
 *
 * @package    properti
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTPembayaranFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_pemesanan'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_cara_bayar'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tanggal_pembayaran'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'amount'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'no_referensi'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'approval_kasir'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tanggal_approval_kasir'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'approval_manager_penjualan' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tanggal_approval_manager'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'kode_pemesanan'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kode_cara_bayar'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tanggal_pembayaran'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'amount'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'no_referensi'               => new sfValidatorPass(array('required' => false)),
      'approval_kasir'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tanggal_approval_kasir'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'approval_manager_penjualan' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tanggal_approval_manager'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('t_pembayaran_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TPembayaran';
  }

  public function getFields()
  {
    return array(
      'kode_pembayaran'            => 'Number',
      'kode_pemesanan'             => 'Number',
      'kode_cara_bayar'            => 'Number',
      'tanggal_pembayaran'         => 'Date',
      'amount'                     => 'Number',
      'no_referensi'               => 'Text',
      'approval_kasir'             => 'Number',
      'tanggal_approval_kasir'     => 'Date',
      'approval_manager_penjualan' => 'Number',
      'tanggal_approval_manager'   => 'Date',
    );
  }
}
