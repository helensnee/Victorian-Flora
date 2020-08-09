<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class VictorianFloraControllerVictorianFloras extends JControllerLegacy
{
	
	
	public function delete()
	{
			
		$input = JFactory::getApplication()->input;
		$recs = $input->get('cid', array(), 'array');
		$nrecs = $input->get('boxchecked', 0, 'int');
		// $input->get(param_name, default_value, filter);
		$model = $this->getModel('victorianflora', 'victorianfloramodel');
		$model->delete($recs);
		$msg = "$nrecs record(s) deleted";
		JFactory::getApplication()->enqueueMessage($msg);
		$this->setRedirect(JRoute::_('index.php?option=com_victorianflora&view=victorianfloras', $msg));
	}
	
	/*
	public function getModel($name = 'VictorianFlora', $prefix = 'VictorianFloraModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}
	*/
	
}

