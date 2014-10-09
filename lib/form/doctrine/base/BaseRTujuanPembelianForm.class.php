<?php

/**
 * RTujuanPembelian form base class.
 *
 * @method RTujuanPembelian getObject() Returns the current form's model object
 *
 * @package    properti
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRTujuanPembelianForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'kode_tujuan_pembelian' => new sfWidgetFormInputText(),
      'tujuan_pembelian'      => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'kode_tujuan_pembelian' => new sfValidatorInteger(),
      'tujuan_pembelian'      => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('r_tujuan_pembelian[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RTujuanPembelian';
  }

}
