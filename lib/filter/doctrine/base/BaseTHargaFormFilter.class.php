<?php

/**
 * THarga filter form base class.
 *
 * @package    properti
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTHargaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_proyek'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'kode_tower'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'type_unit'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'harga_unit'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'berlaku_mulai' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'kode_proyek'   => new sfValidatorPass(array('required' => false)),
      'kode_tower'    => new sfValidatorPass(array('required' => false)),
      'type_unit'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'harga_unit'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'berlaku_mulai' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('t_harga_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'THarga';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'kode_proyek'   => 'Text',
      'kode_tower'    => 'Text',
      'type_unit'     => 'Number',
      'harga_unit'    => 'Number',
      'berlaku_mulai' => 'Date',
    );
  }
}
