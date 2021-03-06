<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RKartuIdentitas', 'doctrine');

/**
 * BaseRKartuIdentitas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $kode_kartu_identitas
 * @property string $kartu_identitas
 * 
 * @method integer         getKodeKartuIdentitas()   Returns the current record's "kode_kartu_identitas" value
 * @method string          getKartuIdentitas()       Returns the current record's "kartu_identitas" value
 * @method RKartuIdentitas setKodeKartuIdentitas()   Sets the current record's "kode_kartu_identitas" value
 * @method RKartuIdentitas setKartuIdentitas()       Sets the current record's "kartu_identitas" value
 * 
 * @package    properti
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRKartuIdentitas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('r_kartu_identitas');
        $this->hasColumn('kode_kartu_identitas', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('kartu_identitas', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}