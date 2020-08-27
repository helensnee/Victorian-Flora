<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_victorianflora
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * VictorianFlora Controller
 *
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 * @since       0.0.9
 */
 
class VictorianFloraControllerVictorianFlora extends JControllerForm
{
	/*
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
	
	public function save() 
	{
		$input = JFactory::getApplication()->input;
		$data = $input->get('jform', array(), 'array');
		$model = $this->getModel();
		$model->save($data);
		$this->setRedirect(JRoute::_("index.php?option=com_victorianflora", false), "Record saved");
	}
	
	public function cancel() 
	{
		$this->setRedirect(JRoute::_("index.php?option=com_victorianflora", false), "Operation  cancelled");

	}
	*/
	
}
