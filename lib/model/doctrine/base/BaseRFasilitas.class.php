<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RFasilitas', 'doctrine');

/**
 * BaseRFasilitas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $kode_fasilitas
 * @property string $fasilitas
 * 
 * @method integer    getKodeFasilitas()  Returns the current record's "kode_fasilitas" value
 * @method string     getFasilitas()      Returns the current record's "fasilitas" value
 * @method RFasilitas setKodeFasilitas()  Sets the current record's "kode_fasilitas" value
 * @method RFasilitas setFasilitas()      Sets the current record's "fasilitas" value
 * 
 * @package    properti
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRFasilitas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('r_fasilitas');
        $this->hasColumn('kode_fasilitas', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('fasilitas', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}