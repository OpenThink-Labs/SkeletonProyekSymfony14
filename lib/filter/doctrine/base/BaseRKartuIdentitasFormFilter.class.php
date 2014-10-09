<?php

/**
 * RKartuIdentitas filter form base class.
 *
 * @package    properti
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRKartuIdentitasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kartu_identitas'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'kartu_identitas'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('r_kartu_identitas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RKartuIdentitas';
  }

  public function getFields()
  {
    return array(
      'kode_kartu_identitas' => 'Number',
      'kartu_identitas'      => 'Text',
    );
  }
}
