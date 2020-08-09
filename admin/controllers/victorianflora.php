<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class VictorianFloraControllerVictorianFlora extends JControllerAdmin
{
	public function add()
	{
		$msg = "redirecting from add";		
		$this->setRedirect(JRoute::_('index.php?option=com_victorianflora&view=victorianflora&layout=edit&id=0', false), $msg);
	}
	
	public function edit() 
	{
		$input = JFactory::getApplication()->input;
		$id = $input->get('id', 0, 'int');
		if ($id == 0)
		{
			$ids = $input->get('cid', array(), 'array');
			$id = $ids[0];
		}
		$msg = "redirecting from edit";		
		$this->setRedirect(JRoute::_("index.php?option=com_victorianflora&view=victorianflora&layout=edit&id=$id", false), $msg);

	}
	
	
}
