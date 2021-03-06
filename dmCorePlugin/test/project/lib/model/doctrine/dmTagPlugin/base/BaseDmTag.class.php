<?php

/**
 * BaseDmTag
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * 
 * @method string getName() Returns the current record's "name" value
 * @method DmTag  setName() Sets the current record's "name" value
 * 
 * @package    retest
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7380 2010-03-15 21:07:50Z jwage $
 */
abstract class BaseDmTag extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dm_tag');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => '255',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}