<?php

/**
 * TPembayaran form base class.
 *
 * @method TPembayaran getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTPembayaranForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_pembayaran'            => new sfWidgetFormInputHidden(),
      'kode_pemesanan'             => new sfWidgetFormInputText(),
      'kode_cara_bayar'            => new sfWidgetFormInputText(),
      'tanggal_pembayaran'         => new sfWidgetFormDate(),
      'amount'                     => new sfWidgetFormInputText(),
      'no_referensi'               => new sfWidgetFormInputText(),
      'approval_kasir'             => new sfWidgetFormInputText(),
      'tanggal_approval_kasir'     => new sfWidgetFormDateTime(),
      'approval_manager_penjualan' => new sfWidgetFormInputText(),
      'tanggal_approval_manager'   => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'kode_pembayaran'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('kode_pembayaran')), 'empty_value' => $this->getObject()->get('kode_pembayaran'), 'required' => false)),
      'kode_pemesanan'             => new sfValidatorInteger(),
      'kode_cara_bayar'            => new sfValidatorInteger(),
      'tanggal_pembayaran'         => new sfValidatorDate(),
      'amount'                     => new sfValidatorInteger(),
      'no_referensi'               => new sfValidatorString(array('max_length' => 30)),
      'approval_kasir'             => new sfValidatorInteger(),
      'tanggal_approval_kasir'     => new sfValidatorDateTime(),
      'approval_manager_penjualan' => new sfValidatorInteger(),
      'tanggal_approval_manager'   => new sfValidatorDate(),
    ));

    $this->widgetSchema->setNameFormat('t_pembayaran[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TPembayaran';
  }

}
