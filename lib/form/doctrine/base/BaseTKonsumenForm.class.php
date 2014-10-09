<?php

/**
 * TKonsumen form base class.
 *
 * @method TKonsumen getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTKonsumenForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_status_konsumen'   => new sfWidgetFormInputText(),
      'kode_konsumen'          => new sfWidgetFormInputHidden(),
      'nama_lengkap_konsumen'  => new sfWidgetFormTextarea(),
      'tempat_lahir_konsumen'  => new sfWidgetFormTextarea(),
      'tanggal_lahir_konsumen' => new sfWidgetFormDate(),
      'kode_jenis_kelamin'     => new sfWidgetFormInputText(),
      'kode_identitas'         => new sfWidgetFormInputText(),
      'no_identitas'           => new sfWidgetFormInputText(),
      'nama_jalan'             => new sfWidgetFormInputText(),
      'rt'                     => new sfWidgetFormInputText(),
      'rw'                     => new sfWidgetFormInputText(),
      'kode_kelurahan'         => new sfWidgetFormInputText(),
      'kode_kecamatan'         => new sfWidgetFormInputText(),
      'kode_kabupaten'         => new sfWidgetFormInputText(),
      'kode_pos'               => new sfWidgetFormInputText(),
      'kode_propinsi'          => new sfWidgetFormInputText(),
      'kode_area'              => new sfWidgetFormInputText(),
      'telpon_rumah'           => new sfWidgetFormInputText(),
      'no_hp'                  => new sfWidgetFormInputText(),
      'no_hp2'                 => new sfWidgetFormInputText(),
      'email1'                 => new sfWidgetFormInputText(),
      'email2'                 => new sfWidgetFormInputText(),
      'kode_pekerjaan'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'kode_status_konsumen'   => new sfValidatorInteger(),
      'kode_konsumen'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('kode_konsumen')), 'empty_value' => $this->getObject()->get('kode_konsumen'), 'required' => false)),
      'nama_lengkap_konsumen'  => new sfValidatorString(),
      'tempat_lahir_konsumen'  => new sfValidatorString(),
      'tanggal_lahir_konsumen' => new sfValidatorDate(),
      'kode_jenis_kelamin'     => new sfValidatorString(array('max_length' => 1)),
      'kode_identitas'         => new sfValidatorInteger(),
      'no_identitas'           => new sfValidatorString(array('max_length' => 30)),
      'nama_jalan'             => new sfValidatorString(array('max_length' => 35)),
      'rt'                     => new sfValidatorString(array('max_length' => 3)),
      'rw'                     => new sfValidatorString(array('max_length' => 3)),
      'kode_kelurahan'         => new sfValidatorInteger(),
      'kode_kecamatan'         => new sfValidatorInteger(),
      'kode_kabupaten'         => new sfValidatorInteger(),
      'kode_pos'               => new sfValidatorString(array('max_length' => 5)),
      'kode_propinsi'          => new sfValidatorInteger(),
      'kode_area'              => new sfValidatorString(array('max_length' => 4)),
      'telpon_rumah'           => new sfValidatorString(array('max_length' => 8)),
      'no_hp'                  => new sfValidatorString(array('max_length' => 15)),
      'no_hp2'                 => new sfValidatorString(array('max_length' => 15)),
      'email1'                 => new sfValidatorString(array('max_length' => 30)),
      'email2'                 => new sfValidatorString(array('max_length' => 30)),
      'kode_pekerjaan'         => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('t_konsumen[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TKonsumen';
  }

}
