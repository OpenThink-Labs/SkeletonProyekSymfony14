<?php

/**
 * TProyek form base class.
 *
 * @method TProyek getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTProyekForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_proyek'         => new sfWidgetFormInputHidden(),
      'nama_proyek'         => new sfWidgetFormTextarea(),
      'jenis_proyek'        => new sfWidgetFormInputText(),
      'nama_jalan'          => new sfWidgetFormTextarea(),
      'kode_kelurahan'      => new sfWidgetFormInputText(),
      'kode_kecamatan'      => new sfWidgetFormInputText(),
      'kode_kabupaten_kota' => new sfWidgetFormInputText(),
      'kode_pos'            => new sfWidgetFormInputText(),
      'kode_propinsi'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'kode_proyek'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('kode_proyek')), 'empty_value' => $this->getObject()->get('kode_proyek'), 'required' => false)),
      'nama_proyek'         => new sfValidatorString(),
      'jenis_proyek'        => new sfValidatorInteger(),
      'nama_jalan'          => new sfValidatorString(),
      'kode_kelurahan'      => new sfValidatorInteger(),
      'kode_kecamatan'      => new sfValidatorInteger(),
      'kode_kabupaten_kota' => new sfValidatorInteger(),
      'kode_pos'            => new sfValidatorString(array('max_length' => 5)),
      'kode_propinsi'       => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('t_proyek[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TProyek';
  }

}
