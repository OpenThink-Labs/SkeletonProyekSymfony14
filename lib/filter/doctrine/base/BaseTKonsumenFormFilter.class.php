<?php

/**
 * TKonsumen filter form base class.
 *
 * @package    properti
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTKonsumenFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_status_konsumen'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nama_lengkap_konsumen'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tempat_lahir_konsumen'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tanggal_lahir_konsumen' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'kode_jenis_kelamin'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_identitas'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'no_identitas'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nama_jalan'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rt'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rw'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_kelurahan'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_kecamatan'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_kabupaten'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_pos'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_propinsi'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_area'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telpon_rumah'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'no_hp'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'no_hp2'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email1'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email2'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_pekerjaan'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'kode_status_konsumen'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nama_lengkap_konsumen'  => new sfValidatorPass(array('required' => false)),
      'tempat_lahir_konsumen'  => new sfValidatorPass(array('required' => false)),
      'tanggal_lahir_konsumen' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'kode_jenis_kelamin'     => new sfValidatorPass(array('required' => false)),
      'kode_identitas'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'no_identitas'           => new sfValidatorPass(array('required' => false)),
      'nama_jalan'             => new sfValidatorPass(array('required' => false)),
      'rt'                     => new sfValidatorPass(array('required' => false)),
      'rw'                     => new sfValidatorPass(array('required' => false)),
      'kode_kelurahan'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kode_kecamatan'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kode_kabupaten'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kode_pos'               => new sfValidatorPass(array('required' => false)),
      'kode_propinsi'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kode_area'              => new sfValidatorPass(array('required' => false)),
      'telpon_rumah'           => new sfValidatorPass(array('required' => false)),
      'no_hp'                  => new sfValidatorPass(array('required' => false)),
      'no_hp2'                 => new sfValidatorPass(array('required' => false)),
      'email1'                 => new sfValidatorPass(array('required' => false)),
      'email2'                 => new sfValidatorPass(array('required' => false)),
      'kode_pekerjaan'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('t_konsumen_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TKonsumen';
  }

  public function getFields()
  {
    return array(
      'kode_status_konsumen'   => 'Number',
      'kode_konsumen'          => 'Number',
      'nama_lengkap_konsumen'  => 'Text',
      'tempat_lahir_konsumen'  => 'Text',
      'tanggal_lahir_konsumen' => 'Date',
      'kode_jenis_kelamin'     => 'Text',
      'kode_identitas'         => 'Number',
      'no_identitas'           => 'Text',
      'nama_jalan'             => 'Text',
      'rt'                     => 'Text',
      'rw'                     => 'Text',
      'kode_kelurahan'         => 'Number',
      'kode_kecamatan'         => 'Number',
      'kode_kabupaten'         => 'Number',
      'kode_pos'               => 'Text',
      'kode_propinsi'          => 'Number',
      'kode_area'              => 'Text',
      'telpon_rumah'           => 'Text',
      'no_hp'                  => 'Text',
      'no_hp2'                 => 'Text',
      'email1'                 => 'Text',
      'email2'                 => 'Text',
      'kode_pekerjaan'         => 'Number',
    );
  }
}
