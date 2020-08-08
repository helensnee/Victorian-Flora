<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class VictorianFloraModelVictorianFlora extends JModelAdmin
{
	/*
	public function delete($recs)
	{
		$table = $this->getTable('victorianflora','victorianfloraTable');
		foreach ($recs as $id)
		{
			$table->delete($id);
		}
	}
	*/
	public function getTable($type = 'VictorianFlora', $prefix = 'VictorianFloraTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	
		
	public function getForm($data = array(), $loadData = true)
	{}
	
}
