<?php


/**
 * This class defines the structure of the 'jobeet_category' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Mon Feb 11 15:58:42 2013
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    plugins.sfJobeetPlugin.lib.model.map
 */
class JobeetCategoryTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.sfJobeetPlugin.lib.model.map.JobeetCategoryTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('jobeet_category');
		$this->setPhpName('JobeetCategory');
		$this->setClassname('JobeetCategory');
		$this->setPackage('plugins.sfJobeetPlugin.lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 255, null);
		$this->addColumn('SLUG', 'Slug', 'VARCHAR', true, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('JobeetJob', 'JobeetJob', RelationMap::ONE_TO_MANY, array('id' => 'category_id', ), null, null);
    $this->addRelation('JobeetCategoryAffiliate', 'JobeetCategoryAffiliate', RelationMap::ONE_TO_MANY, array('id' => 'category_id', ), 'CASCADE', null);
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // JobeetCategoryTableMap
