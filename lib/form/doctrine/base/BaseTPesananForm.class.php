<?php

/**
 * TPesanan form base class.
 *
 * @method TPesanan getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTPesananForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'status_pesanan'        => new sfWidgetFormInputText(),
      'kode_pesanan'          => new sfWidgetFormInputHidden(),
      'kode_unit'             => new sfWidgetFormInputText(),
      'kode_konsumen'         => new sfWidgetFormInputText(),
      'kode_sales'            => new sfWidgetFormInputText(),
      'tanggal_pesan'         => new sfWidgetFormDate(),
      'list_price'            => new sfWidgetFormInputText(),
      'discount'              => new sfWidgetFormInputText(),
      'harga_kontrak'         => new sfWidgetFormInputText(),
      'kode_sumber_info'      => new sfWidgetFormInputText(),
      'kode_pembiayaan'       => new sfWidgetFormInputText(),
      'kode_tujuan_pembelian' => new sfWidgetFormInputText(),
      'kode_event'            => new sfWidgetFormInputText(),
      'tanggal_jatuh_tempo'   => new sfWidgetFormDate(),
      'status_pembayaran'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'status_pesanan'        => new sfValidatorInteger(),
      'kode_pesanan'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('kode_pesanan')), 'empty_value' => $this->getObject()->get('kode_pesanan'), 'required' => false)),
      'kode_unit'             => new sfValidatorString(array('max_length' => 7)),
      'kode_konsumen'         => new sfValidatorInteger(),
      'kode_sales'            => new sfValidatorInteger(),
      'tanggal_pesan'         => new sfValidatorDate(),
      'list_price'            => new sfValidatorInteger(),
      'discount'              => new sfValidatorInteger(),
      'harga_kontrak'         => new sfValidatorInteger(),
      'kode_sumber_info'      => new sfValidatorInteger(),
      'kode_pembiayaan'       => new sfValidatorInteger(),
      'kode_tujuan_pembelian' => new sfValidatorInteger(),
      'kode_event'            => new sfValidatorInteger(),
      'tanggal_jatuh_tempo'   => new sfValidatorDate(),
      'status_pembayaran'     => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('t_pesanan[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TPesanan';
  }

}
