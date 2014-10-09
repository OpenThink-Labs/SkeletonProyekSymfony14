<?php

/**
 * TFasilitas filter form base class.
 *
 * @package    properti
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTFasilitasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_proyek'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_fasilitas' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'kode_proyek'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kode_fasilitas' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('t_fasilitas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TFasilitas';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'kode_proyek'    => 'Number',
      'kode_fasilitas' => 'Number',
    );
  }
}
