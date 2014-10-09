<?php

/**
 * TProyek filter form base class.
 *
 * @package    properti
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTProyekFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nama_proyek'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'jenis_proyek'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nama_jalan'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_kelurahan'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_kecamatan'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_kabupaten_kota' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_pos'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_propinsi'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nama_proyek'         => new sfValidatorPass(array('required' => false)),
      'jenis_proyek'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nama_jalan'          => new sfValidatorPass(array('required' => false)),
      'kode_kelurahan'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kode_kecamatan'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kode_kabupaten_kota' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kode_pos'            => new sfValidatorPass(array('required' => false)),
      'kode_propinsi'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('t_proyek_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TProyek';
  }

  public function getFields()
  {
    return array(
      'kode_proyek'         => 'Text',
      'nama_proyek'         => 'Text',
      'jenis_proyek'        => 'Number',
      'nama_jalan'          => 'Text',
      'kode_kelurahan'      => 'Number',
      'kode_kecamatan'      => 'Number',
      'kode_kabupaten_kota' => 'Number',
      'kode_pos'            => 'Text',
      'kode_propinsi'       => 'Number',
    );
  }
}
