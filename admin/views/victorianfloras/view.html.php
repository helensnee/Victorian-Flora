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
 * VictorianFloras View
 *
 * @since  0.0.1
 */
class VictorianFloraViewVictorianFloras extends JViewLegacy
{
	/**
	 * Display the Victorian Flora view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
				// Get application
		$app = JFactory::getApplication();
		$context = "helloworld.list.admin.helloworld";
		
		// Get data from the model
		$this->items		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');
		
		$this->filter_order 	= $app->getUserStateFromRequest($context.'filter_order', 'filter_order', 'BotanicalName', 'cmd');
		$this->filter_order_Dir = $app->getUserStateFromRequest($context.'filter_order_Dir', 'filter_order_Dir', 'asc', 'cmd');



		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));

			return false;
		}

		// Set the toolbar
		$this->addToolBar();
		
		// Display the template
		parent::display($tpl);
	}
		
	/**
	 * Add the page title and toolbar.
	 *
	 * @return  void
	 *
	 * @since   1.6
	 */
	protected function addToolBar()
	{
		JToolbarHelper::title(JText::_('COM_VICTORIANFLORA_MANAGER_VICTORIANFLORAS'));
		JToolbarHelper::addNew('victorianflora.add');
		JToolbarHelper::editList('victorianflora.edit');
		JToolbarHelper::deleteList('Are you really, really sure?', 'victorianfloras.delete');
	}
}
